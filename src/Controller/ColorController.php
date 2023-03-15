<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ColorController extends AbstractController
{   
    #[Route('/color', name:'app_color')]
    public function index(): Response
    {
        return $this->render('color/index.html.twig');
    }

    #[Route('/color/{color}', name: 'app_color_one')]
    public function displayOne($color): Response
    {   
        
        return $this->render('color/one.html.twig', [
            'controller_name' => 'ColorController',
            'color' => $color
        ]);
    }
}
