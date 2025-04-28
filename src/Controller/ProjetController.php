<?php

namespace App\Controller;

use App\Entity\Projet;
use App\Form\ProjetType;
use App\Repository\ProjetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
#[Route('/projet')]
class ProjetController extends AbstractController
{
    #[Route('/', name: 'app_projet_index', methods: ['GET'])]
public function index(Request $request, ProjetRepository $projetRepository): Response
{
    // Récupération des paramètres
    $search = $request->query->get('search', '');
    $sort = $request->query->get('sort', 'id');
    $direction = $request->query->get('direction', 'asc');
    $statut = $request->query->get('statut', '');
    $ajax = $request->query->get('ajax', false);

    // Recherche avec filtres
    $projets = $projetRepository->findBySearchAndSort($search, $sort, $direction, $statut);

    // Préparation des données pour le graphique
    $chartData = $this->prepareChartData($projets); // <-- Définir $chartData AVANT de l'utiliser

    // Si requête AJAX, retourner uniquement le tableau
    if ($ajax) {
        return $this->render('projet/_projets_table.html.twig', [
            'projets' => $projets,
            'search' => $search,
            'sort' => $sort,
            'direction' => $direction,
            'statut' => $statut,
        ]);
    }

    return $this->render('projet/index.html.twig', [
        'projets' => $projets,
        'search' => $search,
        'sort' => $sort,
        'direction' => $direction,
        'statut' => $statut,
        'chartData' => $chartData, // <-- Maintenant la variable est définie
    ]);
}

    #[Route('/new', name: 'app_projet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $projet = new Projet();
        $form = $this->createForm(ProjetType::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Définir les dates par défaut si non renseignées
            if ($projet->getDateDebut() === null) {
                $projet->setDateDebut(new \DateTime());
            }

            $entityManager->persist($projet);
            $entityManager->flush();

            $this->addFlash('success', 'Le projet a été créé avec succès.');

            return $this->redirectToRoute('app_projet_index');
        }

        return $this->render('projet/new.html.twig', [
            'projet' => $projet,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_projet_show', methods: ['GET'])]
    public function show(Projet $projet): Response
    {
        return $this->render('projet/show.html.twig', [
            'projet' => $projet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_projet_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Projet $projet, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProjetType::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Le projet a été mis à jour avec succès.');

            return $this->redirectToRoute('app_projet_index');
        }

        return $this->render('projet/edit.html.twig', [
            'projet' => $projet,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_projet_delete', methods: ['POST'])]
    public function delete(Request $request, Projet $projet, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$projet->getId(), $request->request->get('_token'))) {
            $entityManager->remove($projet);
            $entityManager->flush();
            $this->addFlash('success', 'Le projet a été supprimé avec succès.');
        }

        return $this->redirectToRoute('app_projet_index');
    }

    #[Route('/export/csv', name: 'app_projet_export_csv', methods: ['GET'])]
    public function exportCsv(ProjetRepository $projetRepository): Response
    {
        $projets = $projetRepository->findAll();
        $data = [];
        
        // En-têtes CSV
        $data[] = ['ID', 'Nom', 'Statut', 'Budget', 'Dépense', 'Date Début', 'Date Fin', 'Description'];
        
        // Données
        foreach ($projets as $projet) {
            $data[] = [
                $projet->getId(),
                $projet->getNom(),
                $projet->getStatut(),
                $projet->getBudget(),
                $projet->getDepense(),
                $projet->getDateDebut() ? $projet->getDateDebut()->format('d/m/Y') : '',
                $projet->getDateFin() ? $projet->getDateFin()->format('d/m/Y') : '',
                $projet->getDescription()
            ];
        }

        // Génération du CSV
        $csv = '';
        foreach ($data as $row) {
            $csv .= implode(';', $row)."\n";
        }

        // Réponse
        $response = new Response($csv);
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="projets_export_'.date('Y-m-d').'.csv"');

        return $response;
    }
    #[Route('/projet/soldes', name: 'app_projet_soldes', methods: ['GET'])]
public function getSoldes(ProjetRepository $projetRepository): JsonResponse
{
    $projets = $projetRepository->findAll();
    $soldes = [];
    
    foreach ($projets as $projet) {
        $soldes[] = [
            'id' => $projet->getId(),
            'solde' => $projet->getSolde()
        ];
    }
    
    return $this->json($soldes);
}
#[Route('/api/projets/chart', name: 'app_projet_chart_data')]
public function getChartData(ProjetRepository $projetRepository): JsonResponse
{
    $projets = $projetRepository->findAll();
    $chartData = [
        'labels' => array_map(fn($p) => $p->getNom(), $projets),
        'budgets' => array_map(fn($p) => $p->getBudget(), $projets),
        'depenses' => array_map(fn($p) => $p->getDepense(), $projets),
        'soldes' => array_map(fn($p) => $p->getBudget() - $p->getDepense(), $projets)
    ];
    
    return $this->json($chartData);
}

private function prepareChartData(array $projets): array
{
    $data = [
        'labels' => [],
        'budgets' => [],
        'depenses' => [],
        'soldes' => []
    ];

    foreach ($projets as $projet) {
        $budget = $projet->getBudget() ?? 0;
        $depense = $projet->getDepense() ?? 0;
        
        $data['labels'][] = $projet->getNom();
        $data['budgets'][] = $budget;
        $data['depenses'][] = $depense;
        $data['soldes'][] = $budget - $depense;
    }

    return $data;
}
}