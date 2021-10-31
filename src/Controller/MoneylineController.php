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

    /**
     * @Route("/americanToImplied",
     *     name="amtoimpl")
     */
    public function americanToImpliedOdds(int $favLine, int $dogLine)
    {
        return $this->render("moneyline/implied_probability.html.twig", [
           'favorite' => 0,
           'dog' => 0,
        ]);
    }
}
