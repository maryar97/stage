<?php

namespace App\Controller;

use App\Entity\Formedeboxe;
use App\Repository\FormedeboxeRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BeaController extends AbstractController
{
    #[Route('/bea', name: 'app_bea')]
    public function index(FormedeboxeRepository $formedeboxeRepository): Response
    {  $forme=$formedeboxeRepository->findBy(['id' => 1]);
        return $this->render('bea/index.html.twig', [
            'formes'=>$forme,
            'routes' => '/' ,
        ]);
    }

    

}
