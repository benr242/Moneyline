<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoneylineController extends AbstractController
{
    /**
     * @Route("/moneyline", name="moneyline")
     */
    public function index(): Response
    {
        return $this->render('moneyline/index.html.twig', [
            'controller_name' => 'MoneylineController',
        ]);
    }
}
