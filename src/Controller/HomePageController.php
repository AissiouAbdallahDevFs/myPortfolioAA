<?php

namespace App\Controller;

use App\Repository\ExperienceRepository;
use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function home(FormationRepository $formationRepository , ExperienceRepository $experienceRepository): Response
    {
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'formations' => $formationRepository->findAll(),
            'experiences' => $experienceRepository->findAll(),
        ]);
    }
}
