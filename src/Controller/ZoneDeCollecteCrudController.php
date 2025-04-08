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
use Symfony\Component\Serializer\SerializerInterface;
use League\Csv\Writer;
use League\Csv\Reader;

#[Route('/zone/de/collecte/crud')]
final class ZoneDeCollecteCrudController extends AbstractController
{
    #[Route(name: 'app_zone_de_collecte_crud_index', methods: ['GET'])]
    public function index(ZoneDeCollecteRepository $zoneDeCollecteRepository): Response
    {
        return $this->render('zone_de_collecte_crud/index.html.twig', [
            'zone_de_collectes' => $zoneDeCollecteRepository->findAll(),
        ]);
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

    #[Route('/export/csv', name: 'app_zone_de_collecte_export_csv', methods: ['GET'])]
    public function exportToCsv(ZoneDeCollecteRepository $repository): Response
    {
        $zones = $repository->findAll();
        
        $csv = Writer::createFromString('');
        $csv->insertOne(['Nom', 'Population', 'Temps de collecte']);
        
        foreach ($zones as $zone) {
            $csv->insertOne([
                $zone->getNom(),
                $zone->getPopulation(),
                $zone->getTempsDeCollecte() ? $zone->getTempsDeCollecte()->format('H:i:s') : ''
            ]);
        }

        $response = new Response($csv->getContent());
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'zones_de_collecte.csv'
        );
        $response->headers->set('Content-Disposition', $disposition);
        $response->headers->set('Content-Type', 'text/csv');

        return $response;
    }

    #[Route('/import/csv', name: 'app_zone_de_collecte_import_csv', methods: ['POST'])]
    public function importFromCsv(Request $request, EntityManagerInterface $em): Response
    {
        $file = $request->files->get('csv_file');
        
        if (!$file || $file->getClientOriginalExtension() !== 'csv') {
            $this->addFlash('error', 'Veuillez uploader un fichier CSV valide');
            return $this->redirectToRoute('app_zone_de_collecte_crud_index');
        }

        $csv = Reader::createFromPath($file->getPathname());
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            $zone = new ZoneDeCollecte();
            $zone->setNom($record['Nom'] ?? '');
            $zone->setPopulation((int)($record['Population'] ?? 0));
            
            if (!empty($record['Temps de collecte'])) {
                $time = \DateTime::createFromFormat('H:i:s', $record['Temps de collecte']);
                $zone->setTempsDeCollecte($time);
            }

            $em->persist($zone);
        }

        $em->flush();
        $this->addFlash('success', 'Import CSV réussi !');

        return $this->redirectToRoute('app_zone_de_collecte_crud_index');
    }
}