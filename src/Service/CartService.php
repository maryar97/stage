<?php

// src/Service/CartService.php

namespace App\Service;

use App\Entity\Commande;
use App\Entity\Formedeboxe;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class CartService 
{
    private RequestStack $requestStack; 
    private EntityManagerInterface $em; 

    public function __construct(RequestStack $requestStack, EntityManagerInterface $em)
    {
        $this->requestStack = $requestStack;
        $this->em = $em;
    }

    public function addToCart(int $id, int $quantite = 1): void 
    {
        $cart = $this->requestStack->getSession()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id] += $quantite;
        } else {
            $cart[$id] = $quantite;
        }

        $this->requestStack->getSession()->set('cart', $cart);
    }

    public function clearCartAndCreateStripeCharge(string $reference): void
    {
        $commande = $this->em->getRepository(Commande::class)->findOneBy(['reference' => $reference]);

        if (!$commande) {
            throw new \Exception('Commande non trouvée');
        }

        $cartItems = $this->getTotal();
        $total = $this->calculateTotal($cartItems);

        if ($total < 1) {
            throw new \Exception('Le montant total doit être supérieur ou égal à 1.');
        }

        // Créer la charge Stripe ici en utilisant $total et les informations de la commande
        // ...

        $this->clearCart();
    }

    public function clearCart(): void
    {
        $this->requestStack->getSession()->remove('cart');
    }

    public function getTotal(): array
    {
        $cart = $this->requestStack->getSession()->get('cart', []); 
        $cartData = []; 

        foreach ($cart as $id => $quantite) {
            $formedeboxe = $this->em->getRepository(Formedeboxe::class)->find($id);

            if ($formedeboxe) {
                $cartData[] = [
                    'formedeboxe' => $formedeboxe,
                    'quantite' => $quantite,
                ];
            } else {
                unset($cart[$id]);
            }
        }

        $this->requestStack->getSession()->set('cart', $cart);
        // dd($cartData);

        return $cartData;
    }

    public function calculateTotal(array $cartItems): float
    {
        $total = 0;

        foreach ($cartItems as $cartItem) {
            $formedeboxe = $cartItem['formedeboxe'];
            $quantite = $cartItem['quantite'];
            $total += $formedeboxe->getPrix() * $quantite;
        }

        return $total;
    }

    public function removeToCart(int $id): void
    {
        $cart = $this->requestStack->getSession()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            $this->requestStack->getSession()->set('cart', $cart);
        }
    }
}
