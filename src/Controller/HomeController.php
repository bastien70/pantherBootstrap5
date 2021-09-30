<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/bootstrap4', name: 'bootstrap4')]
    public function pageWithBootstrap4(): Response
    {
        return $this->render('home/bootstrap4.html.twig');
    }

    #[Route('/bootstrap5', name: 'bootstrap5')]
    public function pageWithBootstrap5(): Response
    {
        return $this->render('home/bootstrap5.html.twig');
    }
}
