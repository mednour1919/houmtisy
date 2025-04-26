<?php

namespace App\Controller;

use App\Entity\ZoneDeCollecte;
use App\Entity\Camion;
use App\Repository\ZoneDeCollecteRepository;
use App\Repository\CamionRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

#[Route('/zones')]
class ZoneDeCollecteFrontController extends AbstractController
{
    #[Route('/', name: 'front_zone_index', methods: ['GET'])]
    public function index(ZoneDeCollecteRepository $repository, Request $request, PaginatorInterface $paginator): Response
    {
        $searchTerm = $request->query->get('q');
        $searchTime = $request->query->get('time');
        
        $query = $repository->createQueryBuilder('z');
        
        if ($searchTerm) {
            $query->andWhere('z.nom LIKE :term')
                  ->setParameter('term', '%'.$searchTerm.'%');
        }
        
        if ($searchTime) {
            $query->andWhere('z.tempsDeCollecte LIKE :time')
                  ->setParameter('time', '%'.$searchTime.'%');
        }

        $zones = $paginator->paginate(
            $query->getQuery(),
            $request->query->getInt('page', 1),
            10
        );

        if ($request->isXmlHttpRequest()) {
            $zonesArray = array_map(function($zone) {
                return [
                    'id' => $zone->getId(),
                    'nom' => $zone->getNom(),
                    'population' => $zone->getPopulation(),
                    'tempsDeCollecte' => $zone->getTempsDeCollecte() ? $zone->getTempsDeCollecte()->format('H:i') : null,
                ];
            }, $zones->getItems());
            
            return new JsonResponse(['zones' => $zonesArray]);
        }

        return $this->render('frontzone/index.html.twig', [
            'zones' => $zones,
            'search_term' => $searchTerm,
            'search_time' => $searchTime,
        ]);
    }

    #[Route('/export', name: 'front_zone_export', methods: ['GET'])]
    public function exportToExcel(ZoneDeCollecteRepository $repository): BinaryFileResponse
    {
        $zones = $repository->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Nom');
        $sheet->setCellValue('B1', 'Population');
        $sheet->setCellValue('C1', 'Temps de collecte');

        $row = 2;
        foreach ($zones as $zone) {
            $sheet->setCellValue('A'.$row, $zone->getNom());
            $sheet->setCellValue('B'.$row, $zone->getPopulation());
            $sheet->setCellValue('C'.$row, 
                $zone->getTempsDeCollecte() ? $zone->getTempsDeCollecte()->format('H:i') : 'N/A'
            );
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'zones_export_'.date('Y-m-d').'.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($tempFile);

        return $this->file($tempFile, $fileName);
    }

    #[Route('/{id}', name: 'front_zone_show', methods: ['GET'])]
    public function show(ZoneDeCollecte $zone): Response
    {
        return $this->render('frontzone/show.html.twig', [
            'zone' => $zone,
        ]);
    }

    #[Route('/{id}/qr-code', name: 'front_zone_qr_code', methods: ['GET'])]
    public function generateQrCode(ZoneDeCollecte $zone, UrlGeneratorInterface $urlGenerator): Response
    {
        $baseUrl = $_ENV['APP_URL'];
        $url = $baseUrl . $urlGenerator->generate(
            'front_zone_camions',
            ['nomZone' => $zone->getNom()]
        );

        $qrCode = new QrCode($url);
        $pngData = (new PngWriter())->write($qrCode);

        return new Response(
            $pngData->getString(),
            Response::HTTP_OK,
            ['Content-Type' => 'image/png']
        );
    }

    #[Route('/{nomZone}/camions', name: 'front_zone_camions', methods: ['GET'])]
    public function showCamionsByZone(string $nomZone, CamionRepository $camionRepository): Response
    {
        $camions = $camionRepository->findBy(['nom' => $nomZone]);

        return $this->render('frontzone/camions_by_zone.html.twig', [
            'camions' => $camions,
            'nomZone' => $nomZone
        ]);
    }
}