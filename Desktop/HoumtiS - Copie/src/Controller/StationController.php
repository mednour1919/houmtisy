<?php

namespace App\Controller;

use App\Entity\Station;
use App\Repository\StationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/station')]
final class StationController extends AbstractController
{
    #[Route('/', name: 'app_station_index', methods: ['GET'])]
    public function index(Request $request, StationRepository $stationRepository, PaginatorInterface $paginator): Response
    {
        // Récupérer le paramètre de recherche par zone
        $zone = $request->query->get('zone');
        
        // Si une zone est spécifiée, utiliser la méthode de recherche par zone
        if ($zone) {
            $queryBuilder = $stationRepository->createQueryBuilder('s')
                ->where('s.zone LIKE :zone')
                ->setParameter('zone', '%' . $zone . '%');
        } else {
            $queryBuilder = $stationRepository->createQueryBuilder('s');
        }

        // Pagination
        $pagination = $paginator->paginate(
            $queryBuilder, // La requête
            $request->query->getInt('page', 1), // Page courante
            10 // Nombre d'éléments par page
        );

        // Calculer la capacité totale
        $totalCapacite = array_sum(array_map(function($station) {
            return $station->getCapacite();
        }, iterator_to_array($pagination)));

        // Compter le nombre total de stations
        $stationCount = $pagination->getTotalItemCount();

        return $this->render('station/index.html.twig', [
            'pagination' => $pagination,
            'zone_search' => $zone,
            'total_capacite' => $totalCapacite,
            'station_count' => $stationCount,
        ]);
    }

    #[Route('/new', name: 'app_station_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $station = new Station();
        $form = $this->createForm(StationType::class, $station);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($station);
            $entityManager->flush();

            $this->addFlash('success', 'La station a été créée avec succès.');
            return $this->redirectToRoute('app_station_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('station/new.html.twig', [
            'station' => $station,
            'form' => $form,
        ]);
    }

    #[Route('/{id_station}', name: 'app_station_show', methods: ['GET'])]
    public function show(Station $station): Response
    {
        return $this->render('station/show.html.twig', [
            'station' => $station,
        ]);
    }

    #[Route('/{id_station}/edit', name: 'app_station_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Station $station, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StationType::class, $station);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La station a été modifiée avec succès.');
            return $this->redirectToRoute('app_station_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('station/edit.html.twig', [
            'station' => $station,
            'form' => $form,
        ]);
    }

    #[Route('/{id_station}', name: 'app_station_delete', methods: ['POST'])]
    public function delete(Request $request, Station $station, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$station->getId_station(), $request->get('_token'))) {
            $entityManager->remove($station);
            $entityManager->flush();
            
            $this->addFlash('success', 'La station a été supprimée avec succès.');
        }

        return $this->redirectToRoute('app_station_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/stats', name: 'app_station_stats', methods: ['GET'])]
    public function stats(StationRepository $stationRepository): Response
    {
        $totalCapacite = $stationRepository->getTotalCapacite();
        $stationCount = count($stationRepository->findAll());
        
        return $this->render('station/stats.html.twig', [
            'total_capacite' => $totalCapacite,
            'station_count' => $stationCount,
        ]);
    }
}
