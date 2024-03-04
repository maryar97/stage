<?php

namespace App\Controller;

use App\Repository\FormedeboxeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AeroboxeController extends AbstractController
{
    #[Route('/aeroboxe', name: 'app_aeroboxe')]
    public function index(FormedeboxeRepository $formedeboxeRepository): Response
    {  $forme3=$formedeboxeRepository->findBy(['id' => 4]);
        return $this->render('aeroboxe/index.html.twig', [
            'formes3'=>$forme3,
            'routes' => '/' ,
        ]);
    }
}
