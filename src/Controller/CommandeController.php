<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Commande;
use App\Form\CommandeType;
use App\Service\CartService;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommandeController extends AbstractController
{
    
    private EntityManagerInterface $em;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em ;
    
    }
    #[Route('/order/create', name: 'order_create')]
    public function index(CartService $cartService): Response
    {

        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }
    
    

        // dd($this->getUser());

        $form = $this->createForm(CommandeType::class, data: null,options: [
            'user' => $this->getUser()
        ]);
        
        return $this->render('commande/index.html.twig', [
            'form' => $form->createView(),
            'recapCart' => $cartService->getTotal()
        ]);
    }
    #[Route('/order/verify', name: 'order_prepare', methods: ['POST'])]
    # ...

public function prepareOrder(SessionInterface $session, CartService $cartService, Request $request): Response
{
    if (!$this->getUser()) {
        return $this->redirectToRoute('app_connexion');
    }

    $form = $this->createForm(CommandeType::class, null, [
        'user' => $this->getUser(),
    ]);


    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $datetimeimmutable = new \DateTimeImmutable('now');

        $commande = new Commande();
        $datetimeimmutable = new \DateTimeImmutable(); // crée une instance avec la date et l'heure actuelles
        $reference = $datetimeimmutable->format('dmy') . '-' . uniqid();
        $facturation = $form->get('adresse')->getData();
        $commande->setUsers($this->getUser());
        $commande->setReference($reference);
        $commande->setCreatedAt($datetimeimmutable);
        $commande->setIsPaid('bool');  // Vous pouvez initialiser cela à false
        $commande->setMethode('stripe');
        $commande->setAdresse($facturation);
        
        // $commande->setStripeSessionId((int)uniqid()); // Castez uniqid() à int si nécessaire
        $this->em->persist($commande);
        $total = 0; // Initialisez le total du panier à 0


        //dd($commande);

        foreach ($cartService->getTotal() as $formedeboxe)
         {
            $panier = new Panier();
            $panier->setPanierCom($commande);  
            $panier->setPanierqte($formedeboxe['quantite']); // Ajoutez la quantité du panier
            $panier->setPrixUnite($formedeboxe['formedeboxe']->getPrix());
            $panier->setFormedeboxe($formedeboxe['formedeboxe']); // Associez le panier à la forme de boxe
            $panier->setTotalRecap($formedeboxe['formedeboxe']->getPrix() * $formedeboxe['quantite']);
            $this->em->persist($panier);
               // Ajoutez le prix de chaque formedeboxe au total de la commande
            //    $total += $panier->getTotalRecap();
          }
          //dd($panier);

           $commande->setTotal($total);
           $total += $panier->getTotalRecap();
            //dd($total);


            // Affectez le total calculé à la commande
        $this->em->flush();

        // Après avoir récupéré la commande depuis la base de données

        return $this->render('commande/recap.html.twig', [
            'commande' => $commande,
            'total' => $total,
            'methode' => $commande->getMethode(),
            'recapCart' => $cartService->getTotal(),
            'reference' => $commande->getReference(),
        ]);
    }

    return $this->redirectToRoute('app_cart');
}

# ...

    
    
}