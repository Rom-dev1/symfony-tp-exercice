<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DateController extends AbstractController
{
    #[Route('/date', name: 'app_date')]
    public function index(): Response
    {
        return $this->render('date/index.html.twig', [
            'controller_name' => 'DateController',
        ]);
    }
}
