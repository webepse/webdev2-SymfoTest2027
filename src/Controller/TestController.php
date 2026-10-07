<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TestController extends AbstractController
{
    #[Route('/test23', name: 'app_test')]
    public function index(): Response
    {
        // action du controller 
        // aller des info à la bdd (modèle)

        // vue
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
