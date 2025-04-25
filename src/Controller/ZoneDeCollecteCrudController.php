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
use Symfony\Component\HttpFoundation\JsonResponse;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxReader;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twilio\Rest\Client;
use Twilio\Rest\Verify\V2\Service\Verification;

#[Route('/zonecl')]
final class ZoneDeCollecteCrudController extends AbstractController
{
    #[Route(name: 'app_zone_de_collecte_crud_index', methods: ['GET'])]
    public function index(ZoneDeCollecteRepository $repository, Request $request): Response
    {
        $searchableFields = [
            'nom' => [
                'operator' => 'LIKE',
                'param_transform' => fn($value) => '%'.$value.'%',
                'query_param' => 'q'
            ],
            'temps_de_collecte' => [
                'operator' => '=',
                'query_param' => 'time'
            ],
            'population' => [
                'operator' => '=',
                'type' => 'number'
            ],
        ];

        $query = $repository->createQueryBuilder('z');
        $searchParameters = [];
        $searchTerm = null;
        $searchTime = null;

        foreach ($searchableFields as $field => $options) {
            $paramName = $options['query_param'] ?? $field;
            $searchValue = $request->query->get($paramName);
            
            if ($searchValue !== null && $searchValue !== '') {
                $paramKey = ':'.$field;
                $transformedValue = isset($options['param_transform']) 
                    ? $options['param_transform']($searchValue) 
                    : $searchValue;
                
                $query->andWhere("z.{$field} {$options['operator']} {$paramKey}")
                      ->setParameter($field, $transformedValue);
                
                $searchParameters[$field] = $searchValue;
                
                if ($paramName === 'q') $searchTerm = $searchValue;
                if ($paramName === 'time') $searchTime = $searchValue;
            }
        }

        $zones = $query->getQuery()->getResult();

        if ($request->isXmlHttpRequest()) {
            $zonesArray = array_map(function($zone) {
                return [
                    'id' => $zone->getId(),
                    'nom' => $zone->getNom(),
                    'population' => $zone->getPopulation(),
                    'tempsDeCollecte' => $zone->getTempsDeCollecte() ? $zone->getTempsDeCollecte()->format('H:i') : null,
                ];
            }, $zones);
            
            return new JsonResponse(['zones' => $zonesArray]);
        }

        return $this->render('zone_de_collecte_crud/index.html.twig', [
            'zone_de_collectes' => $zones,
            'search_parameters' => $searchParameters,
            'search_term' => $searchTerm,
            'search_time' => $searchTime,
            'searchable_fields' => $searchableFields
        ]);
    }

    #[Route('/export', name: 'app_zone_export', methods: ['GET'])]
    public function exportToExcel(ZoneDeCollecteRepository $repository): BinaryFileResponse
    {
        $zones = $repository->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Nom');
        $sheet->setCellValue('C1', 'Population');
        $sheet->setCellValue('D1', 'Temps de collecte');

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
            array_shift($rows);
            
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
        // Configuration Twilio directe
        $twilio = new Client(
            'ACec96f0bb88a211167535857a14abb0e2', // Account SID
            'e85b72fd960d0121f02616078aa53549'    // Auth Token
        );
        
        $verifyServiceSid = 'VA820edd0de12d298cee2bace4c8247faf';
        $fromNumber = '+17067024124';
        $receiverNumber = $this->formatPhoneNumber('92636109');

        try {
            // Envoi du code de vérification
            $verification = $twilio->verify->v2->services($verifyServiceSid)
                ->verifications
                ->create($receiverNumber, "sms");

            $request->getSession()->set('pending_zone', $zoneDeCollecte);
            $request->getSession()->set('verification_sid', $verification->sid);

            return $this->redirectToRoute('app_verify_zone');
            
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de l\'envoi du SMS: '.$e->getMessage());
        }
    }

    return $this->render('zone_de_collecte_crud/new.html.twig', [
        'zone_de_collecte' => $zoneDeCollecte,
        'form' => $form,
    ]);
}

#[Route('/verify-zone', name: 'app_verify_zone', methods: ['GET', 'POST'])]
public function verifyZone(Request $request, EntityManagerInterface $entityManager): Response
{
    $zoneDeCollecte = $request->getSession()->get('pending_zone');
    $verificationSid = $request->getSession()->get('verification_sid');

    if (!$zoneDeCollecte || !$verificationSid) {
        $this->addFlash('error', 'Session expirée');
        return $this->redirectToRoute('app_zone_de_collecte_crud_new');
    }

    if ($request->isMethod('POST')) {
        $code = $request->request->get('verification_code');
        
        if (empty($code) || !preg_match('/^\d{6}$/', $code)) {
            $this->addFlash('error', 'Code invalide (6 chiffres requis)');
            return $this->render('zone_de_collecte_crud/verify.html.twig');
        }

        // Configuration Twilio directe
        $twilio = new Client(
            'ACec96f0bb88a211167535857a14abb0e2', // Account SID
            'e85b72fd960d0121f02616078aa53549'    // Auth Token
        );
        
        $verifyServiceSid = 'VA820edd0de12d298cee2bace4c8247faf';

        try {
            $verificationCheck = $twilio->verify->v2->services($verifyServiceSid)
                ->verificationChecks
                ->create([
                    'verificationSid' => $verificationSid,
                    'code' => $code
                ]);

            if ($verificationCheck->status === 'approved') {
                $entityManager->persist($zoneDeCollecte);
                $entityManager->flush();

                // Envoi de confirmation
                $twilio->messages->create(
                    $this->formatPhoneNumber('92636109'),
                    [
                        'from' => '+17067024124',
                        'body' => "Zone '{$zoneDeCollecte->getNom()}' ajoutée avec succès"
                    ]
                );

                $request->getSession()->remove('pending_zone');
                $request->getSession()->remove('verification_sid');

                $this->addFlash('success', 'Zone ajoutée avec succès!');
                return $this->redirectToRoute('app_zone_de_collecte_crud_index');
            } else {
                $this->addFlash('error', 'Code incorrect');
            }
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur de vérification: '.$e->getMessage());
        }
    }

    return $this->render('zone_de_collecte_crud/verify.html.twig');
}

private function formatPhoneNumber(string $phoneNumber): string
{
    $cleaned = preg_replace('/[^0-9]/', '', $phoneNumber);
    
    if (strlen($cleaned) === 8) { // Format Tunisien 9XXXXXXX
        return '+216'.$cleaned;
    }
    
    throw new \InvalidArgumentException('Numéro tunisien invalide');
}
    #[Route('/mobile/{id}', name: 'app_zone_mobile_view')]
    public function mobileView(ZoneDeCollecte $zoneDeCollecte): Response
    {
        return new Response(
            sprintf("Zone: %s\nPopulation: %s\nTemps collecte: %s",
                $zoneDeCollecte->getNom(),
                $zoneDeCollecte->getPopulation(),
                $zoneDeCollecte->getTempsDeCollecte() ? $zoneDeCollecte->getTempsDeCollecte()->format('H:i') : 'N/A'
            ),
            Response::HTTP_OK,
            ['Content-Type' => 'text/plain']
        );
    }

    #[Route('/{id}', name: 'app_zone_de_collecte_crud_show', methods: ['GET'])]
    public function show(ZoneDeCollecte $zoneDeCollecte): Response
    {
        $mobileUrl = $this->generateUrl('app_zone_mobile_view', [
            'id' => $zoneDeCollecte->getId()
        ], UrlGeneratorInterface::ABSOLUTE_URL);

        return $this->render('zone_de_collecte_crud/show.html.twig', [
            'zone_de_collecte' => $zoneDeCollecte,
            'mobile_url' => $mobileUrl
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

    #[Route('/api/search', name: 'app_zone_de_collecte_search', methods: ['GET'])]
    public function search(ZoneDeCollecteRepository $repository, Request $request): JsonResponse
    {
        $term = $request->query->get('term', '');
        
        $zones = $repository->createQueryBuilder('z')
            ->where('z.nom LIKE :term')
            ->setParameter('term', '%'.$term.'%')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
        
        $results = array_map(function($zone) {
            return [
                'id' => $zone->getId(),
                'text' => $zone->getNom()
            ];
        }, $zones);
        
        return $this->json(['results' => $results]);
    }
}