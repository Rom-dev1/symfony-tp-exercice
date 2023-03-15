<?php

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DateController extends AbstractController
{
    #[Route('/date/now', name: 'app_date')]
    public function index(): Response
    {   
        date_default_timezone_set('Europe/Paris');
        $date = date('d/m/Y H:i:s');

        return $this->render('date/index.html.twig', [
            'date' => $date,
        ]);
    }
}
