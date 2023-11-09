<?php

namespace App\Controller;

use App\Repository\PersonalInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    #[Route('/', name: 'app_portfolio')]
    public function index(PersonalInfoRepository $personalInfoRepository): Response
    {

        $personalInfo = $personalInfoRepository->findAll();

        return $this->render('portfolio/index.html.twig', [
            'personalInfo' => $personalInfo,
        ]);
    }
}
