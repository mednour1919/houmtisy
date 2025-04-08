<?php

namespace App\Controller;
use App\Repository\CamionRepository;
use App\Entity\Camion;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CamionController extends AbstractController
{
    #[Route('/camion', name: 'app_camion')]
    public function index(): Response
    {
        return $this->render('camion/index.html.twig', [
            'controller_name' => 'CamionController',
        ]);
    }
}
