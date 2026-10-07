<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $tab = ["Valeur 1","Valeur 2","Valeur 3","Valeur 4"];
        $personne = [
            "nom" => "Wayne",
            "prenom" => "Bruce",
            "alias" => "Batman"
        ];

        //dump($personne);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'age' => 20,
            'tab' => $tab,
            'person' => $personne
        ]);
    }

    #[Route("/test", name: "app_test")]
    public function test(): Response
    {
        return $this->render("home/test.html.twig");
    }

    //#[Route("/blog/{id}", name: "blog_show", defaults: ['id' => 1], requirements: ['id' => '\d+'])]
    #[Route("/blog/{id<\d+>}", name: "blog_show")]
    public function show(int $id): Response
    {
        return $this->render("home/show.html.twig",[
            "param" => $id
        ]);
    }
}
