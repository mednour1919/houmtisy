<?php

namespace App\Controller;

use App\Entity\Camion;
use App\Repository\CamionRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

#[Route('/camions')]
final class CamionFrontController extends AbstractController
{
    #[Route('/', name: 'front_camion_index', methods: ['GET'])]
    public function index(CamionRepository $repository, Request $request, PaginatorInterface $paginator): Response
    {
        $searchTerm = $request->query->get('q');
        
        $query = $repository->createQueryBuilder('c');
        
        if ($searchTerm) {
            $query->where('c.nom LIKE :term OR c.type LIKE :term OR c.statut LIKE :term')
                  ->setParameter('term', '%'.$searchTerm.'%');
        }

        // Pagination des résultats (10 éléments par page)
        $camions = $paginator->paginate(
            $query->getQuery(),
            $request->query->getInt('page', 1),
            8
        );

        // Réponse AJAX pour la recherche en temps réel
        if ($request->isXmlHttpRequest()) {
            $camionsArray = array_map(function($camion) {
                return [
                    'nom' => $camion->getNom(),
                    'type' => $camion->getType(),
                    'statut' => $camion->getStatut(),
                    'capacity' => $camion->getCapacity(),
                    'image' => $camion->getImage(),
                ];
            }, $camions->getItems());
            
            return new JsonResponse(['camions' => $camionsArray]);
        }

        return $this->render('frontcamion/index.html.twig', [
            'camions' => $camions,
            'search_term' => $searchTerm,
        ]);
    }

    #[Route('/export', name: 'front_camion_export', methods: ['GET'])]
    public function exportToExcel(CamionRepository $repository): BinaryFileResponse
    {
        $camionsData = $repository->findAllForExport();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // En-têtes
        $sheet->fromArray(
            ['Type', 'Statut', 'Capacité', 'Nom', 'Image'],
            null,
            'A1'
        );

        // Données
        $sheet->fromArray($camionsData, null, 'A2');

        // Génération du fichier
        $writer = new Xlsx($spreadsheet);
        $fileName = 'export_camions_'.date('Y-m-d').'.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($tempFile);

        return $this->file($tempFile, $fileName);
    }

    #[Route('/{id}', name: 'front_camion_show', methods: ['GET'])]
    public function show(Camion $camion): Response
    {
        return $this->render('frontcamion/show.html.twig', [
            'camion' => $camion,
        ]);
    }

    #[Route('/api/search', name: 'front_camion_search', methods: ['GET'])]
    public function search(CamionRepository $repository, Request $request): JsonResponse
    {
        $term = $request->query->get('term', '');
        
        $camions = $repository->createQueryBuilder('c')
            ->where('c.nom LIKE :term OR c.type LIKE :term OR c.statut LIKE :term')
            ->setParameter('term', '%'.$term.'%')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
        
        $results = array_map(function($camion) {
            return [
                'text' => $camion->getNom(),
                'type' => $camion->getType(),
                'statut' => $camion->getStatut()
            ];
        }, $camions);
        
        return $this->json(['results' => $results]);
    }
}