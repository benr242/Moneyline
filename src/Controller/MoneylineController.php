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
    public function index($favLine = 0, $dogLine = 0): Response
    {
        $favLine = 220;
        $dogLine = 180;
        /*
        return $this->redirectToRoute('amtoimpl', [
            'favLine' => $favLine,
            'dogLine' => $dogLine
        ]);
        */
        return $this->render('moneyline/index.html.twig', [
            'controller_name' => 'MoneylineController',
        ]);
    }

    /**
     * @Route("/americanToImplied",
     *     name="amtoimpl"),
     */
    public function americanToImpliedOdds(int $favLine, int $dogLine)
    {
        //$favLine = 220;
        //$dogLine = 180;

        return $this->render("moneyline/implied_probability.html.twig", [
           'favorite' => $favLine,
           'dog' => $dogLine,
        ]);
    }
}
