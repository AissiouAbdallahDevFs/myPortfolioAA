<?php

namespace App\Controller;

use App\Repository\ExperienceRepository;
use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    
    #[Route('/admin', name: 'admin')]
        public function admin(FormationRepository $formationRepository , ExperienceRepository $experienceRepository): Response
        {
            return $this->render('admin/index.html.twig', [
                'controller_name' => 'HomePageController',
                'formations' => $formationRepository->findAll(),
                'experiences' => $experienceRepository->findAll(),
            ]);
        }
}
