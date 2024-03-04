<?php

// src/Controller/StripeController.php

namespace App\Controller;

use Stripe\Charge;
use Stripe\Stripe;
use App\Entity\Commande;
use App\Service\CartService;
use Psr\Log\LoggerInterface;
use Stripe\Exception\ApiErrorException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StripeController extends AbstractController
{
    private EntityManagerInterface $em;
    private LoggerInterface $logger;

    public function __construct(EntityManagerInterface $entityManager, LoggerInterface $logger)
    {
        $this->em = $entityManager;
        $this->logger = $logger;
    }

    #[Route('/stripe/create-charge/{reference}', name: 'app_stripe_charge', methods: ['POST'])]
    public function createCharge(Request $request, string $reference, CartService $cartService): Response
    {
        try {
            $commande = $this->em->getRepository(Commande::class)->findOneBy(['reference' => $reference]);

            if (!$commande) {
                throw $this->createNotFoundException('Commande non trouvée');
            }

            // Assurez-vous que getTotal() retourne un nombre valide
            $cartItems = $cartService->getTotal();
            $total = $cartService->calculateTotal($cartItems);

            // Vérifiez si $total est bien défini et est un nombre
            if (!isset($total) || !is_numeric($total) || $total < 1) {
                throw new \Exception('Le montant total doit être supérieur ou égal à 1.');
            }

            Stripe::setApiKey("sk_test_51Ooufj2KnHjYmx6aeRRiDPJvw5AJpeQ4fe7EcB1n1i975eoo8qtYA8wbjyBN2hGQt1HXpPyaHNwG0yFfSZh2u3FL00eNLmOckS");

            $charge = Charge::create([
                "amount" => $total * 100,
                "currency" => "eur",
                "source" => $request->request->get('stripeToken'),
                "description" => "Binaryboxtuts Payment Test"
            ]);

            $this->logger->info('Transaction Stripe créée', [
                'id' => $charge->id,
                'amount' => $charge->amount,
                'currency' => $charge->currency,
                'status' => $charge->status,
                'description' => $charge->description,
            ]);

            // Assurez-vous que cette méthode est correctement implémentée dans votre service
            $cartService->clearCart();

            return $this->redirectToRoute('app_cart');
        } catch (ApiErrorException $e) {
            $this->logger->error('Erreur lors de la création de la transaction Stripe', ['error' => $e->getMessage()]);
            return $this->redirectToRoute('app_stripe', ["reference" => $reference], Response::HTTP_SEE_OTHER);
        } catch (\Exception $e) {
            $this->logger->error('Erreur inattendue', ['error' => $e->getMessage()]);
            return $this->redirectToRoute('app_stripe', ["reference" => $reference], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/stripe/{reference}', name: 'app_stripe')]
    public function index(string $reference, CartService $cartService): Response
    {
        $commande = $this->em->getRepository(Commande::class)->findOneBy(['reference' => $reference]);

        return $this->render('stripe/index.html.twig', [
            'stripe_key' => "pk_test_51N0iZNFPaCkpFiEQIRkmwkEx6UCjr8m8s0LcjS3EcmQgFWKtdAz1oPVQMe8WutgffPIDLBQGRszwqnsmDvqZqZKY00Yub5vCGv",
            'commande' => $commande,
            'recapCart' => $cartService->getTotal(),
        ]);
    }
}
