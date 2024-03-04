<?php

namespace App\Controller;

use App\Repository\FormedeboxeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BpController extends AbstractController
{
    #[Route('/bp', name: 'app_bp')]
    public function index( FormedeboxeRepository $formedeboxeRepository): Response
    {$forme2=$formedeboxeRepository->findBy(['id' => 3]);
        return $this->render('bp/index.html.twig', [
            'formes2'=>$forme2,
            'routes' => '/' ,
        ]);
    }
}
