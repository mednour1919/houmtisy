<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ZoneDeCollecteController extends AbstractController
{
    #[Route('/zone/de/collecte', name: 'app_zone_de_collecte')]
    public function index(): Response
    {
        return $this->render('zone_de_collecte/index.html.twig', [
            'controller_name' => 'ZoneDeCollecteController',
        ]);
    }
}
