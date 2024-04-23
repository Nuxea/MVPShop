<?php

namespace App\Controller;

use App\Entity\Purchase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CheckoutController extends AbstractController
{
    #[Route('/checkout', name: 'app_checkout')]
    public function index(): Response
    {
        return $this->render('checkout/index.html.twig');
    }

    #[Route('/confirmation/{id}', name: 'app_confirmation')]
    public function confirmation(Purchase $purchase): Response
    {
        $totalPrice = 0;
        $purchaseItems = $purchase->getPurchaseItems();

        for ($i = 0; $i < count($purchaseItems); $i++) {
            $totalPrice += $purchaseItems[$i]->getProduct()->getPrice() * $purchaseItems[$i]->getQuantity();
        }

        return $this->render('checkout/confirmation.html.twig', [
            'purchase' => $purchase,
            'totalPrice' => $totalPrice,
        ]);
    }
}
