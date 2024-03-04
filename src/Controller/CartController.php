<?php

namespace App\Controller;

use App\Service\CartService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    private RequestStack $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    #[Route('/mon-panier', name: 'app_cart')]
    public function index(CartService $cartService): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $total = 0; // initialisation du total du panier

        $cartData = $cartService->getTotal();

        return $this->render('cart/index.html.twig', [
            'cart' => $cartData,
            'total' => $total,
        ]);
    }

    #[Route('/mon-panier/add/{id<\d+>}', name: 'cart_add')]
    public function addToCart(CartService $cartService, int $id): Response
    {
        $cartService->addToCart($id);
        return $this->redirectToRoute('app_cart');
    }

    #[Route('/mon-panier/remove/{id}', name: 'cart_remove')]
    public function removeToCart(CartService $cartService, int $id): Response
    {
        $cartService->removeToCart($id); // Utilisation de la méthode correcte
        return $this->redirectToRoute('app_cart');
    }

    #[Route('/mon-panier/removeAll', name: 'cart_removeAll')]
    public function removeAll(CartService $cartService): Response
    {
        $cartService->clearCart(); // Utilisation de la méthode correcte
        return $this->redirectToRoute('app_cart');
    }

    //essaie
}
