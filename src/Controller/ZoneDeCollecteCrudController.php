<?php

namespace App\Controller;

use App\Entity\ZoneDeCollecte;
use App\Form\ZoneDeCollecteType;
use App\Repository\ZoneDeCollecteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxReader;

#[Route('/zonecl')]
final class ZoneDeCollecteCrudController extends AbstractController
{
    #[Route(name: 'app_zone_de_collecte_crud_index', methods: ['GET'])]
    public function index(ZoneDeCollecteRepository $repository, Request $request): Response
    {
        $searchTerm = $request->query->get('q');
        $searchTime = $request->query->get('time');

        $query = $repository->createQueryBuilder('z');
        
        if ($searchTerm) {
            $query->andWhere('z.nom LIKE :term')
                  ->setParameter('term', '%'.$searchTerm.'%');
        }
        
        if ($searchTime) {
            $query->andWhere('z.temps_de_collecte = :time')
                  ->setParameter('time', $searchTime);
        }

        $zones = $query->getQuery()->getResult();

        return $this->render('zone_de_collecte_crud/index.html.twig', [
            'zone_de_collectes' => $zones,
            'search_term' => $searchTerm,
            'search_time' => $searchTime
        ]);
    }

    #[Route('/export', name: 'app_zone_export', methods: ['GET'])]
    public function exportToExcel(ZoneDeCollecteRepository $repository): BinaryFileResponse
    {
        $zones = $repository->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // En-têtes
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Nom');
        $sheet->setCellValue('C1', 'Population');
        $sheet->setCellValue('D1', 'Temps de collecte');

        // Données
        $row = 2;
        foreach ($zones as $zone) {
            $sheet->setCellValue('A'.$row, $zone->getId());
            $sheet->setCellValue('B'.$row, $zone->getNom());
            $sheet->setCellValue('C'.$row, $zone->getPopulation());
            $sheet->setCellValue('D'.$row, $zone->getTempsDeCollecte() ? $zone->getTempsDeCollecte()->format('H:i:s') : '');
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'zones_export_'.date('Y-m-d').'.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($tempFile);

        $response = new BinaryFileResponse($tempFile);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $fileName
        );

        return $response;
    }

    #[Route('/import', name: 'app_zone_import', methods: ['POST'])]
    public function importFromExcel(Request $request, EntityManagerInterface $em, ZoneDeCollecteRepository $repo): Response
    {
        $file = $request->files->get('excel_file');
        
        if ($file) {
            $reader = new XlsxReader();
            $spreadsheet = $reader->load($file->getPathname());
            $sheet = $spreadsheet->getActiveSheet();
            
            $rows = $sheet->toArray();
            array_shift($rows); // Remove header
            
            $imported = 0;
            $skipped = 0;
            
            foreach ($rows as $row) {
                $existing = $repo->findOneBy(['nom' => $row[1] ?? '']);
                
                if (!$existing) {
                    $zone = new ZoneDeCollecte();
                    $zone->setNom($row[1] ?? '');
                    $zone->setPopulation($row[2] ?? null);
                    
                    if (!empty($row[3])) {
                        $zone->setTempsDeCollecte(\DateTime::createFromFormat('H:i:s', $row[3]));
                    }
                    
                    $em->persist($zone);
                    $imported++;
                } else {
                    $skipped++;
                }
            }
            
            $em->flush();
            $this->addFlash('success', "Import réussi : $imported nouvelles zones, $skipped doublons ignorés");
        } else {
            $this->addFlash('error', 'Aucun fichier sélectionné');
        }

        return $this->redirectToRoute('app_zone_de_collecte_crud_index');
    }

    #[Route('/new', name: 'app_zone_de_collecte_crud_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $zoneDeCollecte = new ZoneDeCollecte();
        $form = $this->createForm(ZoneDeCollecteType::class, $zoneDeCollecte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($zoneDeCollecte);
            $entityManager->flush();

            return $this->redirectToRoute('app_zone_de_collecte_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('zone_de_collecte_crud/new.html.twig', [
            'zone_de_collecte' => $zoneDeCollecte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_zone_de_collecte_crud_show', methods: ['GET'])]
    public function show(ZoneDeCollecte $zoneDeCollecte): Response
    {
        return $this->render('zone_de_collecte_crud/show.html.twig', [
            'zone_de_collecte' => $zoneDeCollecte,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_zone_de_collecte_crud_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ZoneDeCollecte $zoneDeCollecte, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ZoneDeCollecteType::class, $zoneDeCollecte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_zone_de_collecte_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('zone_de_collecte_crud/edit.html.twig', [
            'zone_de_collecte' => $zoneDeCollecte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_zone_de_collecte_crud_delete', methods: ['POST'])]
    public function delete(Request $request, ZoneDeCollecte $zoneDeCollecte, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$zoneDeCollecte->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($zoneDeCollecte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_zone_de_collecte_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}