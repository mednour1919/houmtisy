<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;


#[Route('/reservation')]
final class ReservationController extends AbstractController
{
    #[Route('/', name: 'app_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository, ChartBuilderInterface $chartBuilder): Response
    {
        // Récupérer toutes les réservations
        $reservations = $reservationRepository->findAll();

        // Préparer les données pour les graphiques
        $reservationsParJour = [];
        $reservationsParStation = [];

        foreach ($reservations as $reservation) {
            // Statistiques par jour
            $date = $reservation->getDateReservation();
            if (!isset($reservationsParJour[$date])) {
                $reservationsParJour[$date] = 0;
            }
            $reservationsParJour[$date]++;

            // Statistiques par station
            $stationId = $reservation->getIdStation();
            if (!isset($reservationsParStation[$stationId])) {
                $reservationsParStation[$stationId] = 0;
            }
            $reservationsParStation[$stationId]++;
        }

        // Trier par date
        ksort($reservationsParJour);

        // Créer le graphique des réservations par jour
        $chartJour = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chartJour->setData([
            'labels' => array_keys($reservationsParJour),
            'datasets' => [
                [
                    'label' => 'Réservations par jour',
                    'backgroundColor' => 'rgb(54, 162, 235, 0.2)',
                    'borderColor' => 'rgb(54, 162, 235)',
                    'data' => array_values($reservationsParJour),
                    'tension' => 0.4,
                ]
            ]
        ]);
        $chartJour->setOptions([
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'title' => [
                        'display' => true,
                        'text' => 'Nombre de réservations'
                    ]
                ],
                'x' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Date'
                    ]
                ]
            ],
            'plugins' => [
                'title' => [
                    'display' => true,
                    'text' => 'Évolution des réservations dans le temps'
                ]
            ]
        ]);

        // Créer le graphique des réservations par station
        $chartStation = $chartBuilder->createChart(Chart::TYPE_BAR);
        $chartStation->setData([
            'labels' => array_map(function($id) { return 'Station ' . $id; }, array_keys($reservationsParStation)),
            'datasets' => [
                [
                    'label' => 'Réservations par station',
                    'backgroundColor' => 'rgb(75, 192, 192)',
                    'data' => array_values($reservationsParStation),
                ]
            ]
        ]);
        $chartStation->setOptions([
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'title' => [
                        'display' => true,
                        'text' => 'Nombre de réservations'
                    ]
                ]
            ],
            'plugins' => [
                'title' => [
                    'display' => true,
                    'text' => 'Réservations par station'
                ]
            ]
        ]);

        // Calculer quelques statistiques supplémentaires
        $totalReservations = count($reservations);
        $moyenneParJour = $totalReservations > 0 ? round($totalReservations / count($reservationsParJour), 2) : 0;
        $stationLaPlusReservee = $totalReservations > 0 ? array_search(max($reservationsParStation), $reservationsParStation) : null;

        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
            'chartJour' => $chartJour,
            'chartStation' => $chartStation,
            'stats' => [
                'total' => $totalReservations,
                'moyenneParJour' => $moyenneParJour,
                'stationLaPlusReservee' => $stationLaPlusReservee
            ]
        ]);
    }

    #[Route('/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{idReservation}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{idReservation}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{idReservation}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getIdReservation(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
}
