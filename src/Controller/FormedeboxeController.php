<?php

namespace App\Controller;

use App\Entity\Formedeboxe;
use App\Repository\FormedeboxeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormedeboxeController extends AbstractController
{
    #[Route('/formedeboxe', name: 'app_formedeboxe')]
    public function index(FormedeboxeRepository $formedeboxeRepository): Response
    {
        $forme=$formedeboxeRepository->findBy(['id' => 1]);
        $forme1=$formedeboxeRepository->findBy(['id' => 2]);
        $forme2=$formedeboxeRepository->findBy(['id' => 3]);
        $forme3=$formedeboxeRepository->findBy(['id' => 4]);


        return $this->render('formedeboxe/index.html.twig', [
            'formes'=>$forme,'formes1'=>$forme1,'formes2'=>$forme2,'formes3'=>$forme3,
            'routes' => '/' ,
        ]);
    }
    
}

