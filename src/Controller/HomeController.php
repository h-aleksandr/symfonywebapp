<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $test = [
          1,
            2,
            3,
            4,
        ];
        return $this->render('home/index.html.twig', [
            'test' => $test,
        ]);
    }
}
