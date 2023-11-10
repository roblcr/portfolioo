<?php

namespace App\Controller;

use App\Repository\FormationRepository;
use App\Repository\PersonalInfoRepository;
use App\Repository\WorkExperienceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    #[Route('/', name: 'app_portfolio')]
    public function index(PersonalInfoRepository $personalInfoRepository, WorkExperienceRepository $workExperienceRepository, FormationRepository $formationRepository): Response
    {

        $personalInfo = $personalInfoRepository->findAll();
        $workExperience = $workExperienceRepository->findAll();
        $formation = $formationRepository->findAll();

        return $this->render('portfolio/index.html.twig', [
            'personalInfo' => $personalInfo,
            'workExperience' => $workExperience,
            'formation' => $formation
        ]);
    }
}
