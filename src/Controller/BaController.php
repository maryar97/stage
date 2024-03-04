<?php

namespace App\Controller;

use App\Repository\FormedeboxeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaController extends AbstractController
{
    #[Route('/ba', name: 'app_ba')]
    public function index( FormedeboxeRepository $formedeboxeRepository): Response
    {$forme1=$formedeboxeRepository->findBy(['id' => 2]);
        return $this->render('ba/index.html.twig', [
            'formes1'=>$forme1,
            'routes' => '/' ,

        ]);
    }
}
