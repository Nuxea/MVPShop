<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ShoppingCartController extends AbstractController
{
    #[Route('/shopping-cart', name: 'app_cart')]
    public function index(): Response
    {
        return $this->render('cart/index.html.twig');
    }
}
