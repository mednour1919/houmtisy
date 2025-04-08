<?php

namespace App\Controller;

use App\Entity\Camion;
use App\Form\CamionType;
use App\Repository\CamionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use League\Csv\Writer;
use League\Csv\Reader;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

#[Route('/camion/c/r/u/d')]
final class CamionCRUDController extends AbstractController
{
    #[Route(name: 'app_camion_c_r_u_d_index', methods: ['GET'])]
    public function index(CamionRepository $camionRepository): Response
    {
        return $this->render('camion_crud/index.html.twig', [
            'camions' => $camionRepository->findAll(),
            'uploads_directory' => $this->getParameter('uploads_directory'),
        ]);
    }

    #[Route('/new', name: 'app_camion_c_r_u_d_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $camion = new Camion();
        $form = $this->createForm(CamionType::class, $camion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('uploads_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Gérer l'exception si nécessaire
                }

                $camion->setImage($newFilename);
            }

            $entityManager->persist($camion);
            $entityManager->flush();

            return $this->redirectToRoute('app_camion_c_r_u_d_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('camion_crud/new.html.twig', [
            'camion' => $camion,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_camion_c_r_u_d_show', methods: ['GET'])]
    public function show(Camion $camion): Response
    {
        return $this->render('camion_crud/show.html.twig', [
            'camion' => $camion,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_camion_c_r_u_d_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Camion $camion, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $oldFilename = $camion->getImage();
        
        $form = $this->createForm(CamionType::class, $camion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                if ($oldFilename) {
                    $oldFilePath = $this->getParameter('uploads_directory').'/'.$oldFilename;
                    if (file_exists($oldFilePath)) {
                        unlink($oldFilePath);
                    }
                }

                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('uploads_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Gérer l'exception si nécessaire
                }

                $camion->setImage($newFilename);
            } else {
                $camion->setImage($oldFilename);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_camion_c_r_u_d_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('camion_crud/edit.html.twig', [
            'camion' => $camion,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_camion_c_r_u_d_delete', methods: ['POST'])]
    public function delete(Request $request, Camion $camion, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$camion->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($camion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_camion_c_r_u_d_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/export/csv', name: 'app_camion_export_csv', methods: ['GET'])]
    public function exportToCsv(CamionRepository $repository): Response
    {
        $camions = $repository->findAll();
        
        $csv = Writer::createFromString('');
        $csv->insertOne(['Type', 'Statut', 'Capacity', 'Nom', 'Image']);
        
        foreach ($camions as $camion) {
            $csv->insertOne([
                $camion->getType(),
                $camion->getStatut(),
                $camion->getCapacity(),
                $camion->getNom(),
                $camion->getImage()
            ]);
        }

        $response = new Response($csv->toString());
        $response->headers->set('Content-Type', 'text/csv; charset=UTF-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="camions_'.date('Y-m-d').'.csv"');
        
        return $response;
    }

    #[Route('/import/csv', name: 'app_camion_import_csv', methods: ['POST'])]
    public function importFromCsv(Request $request, EntityManagerInterface $em): Response
    {
        $file = $request->files->get('csv_file');
        
        if (!$file) {
            $this->addFlash('error', 'Aucun fichier sélectionné');
            return $this->redirectToRoute('app_camion_c_r_u_d_index');
        }

        if ($file->getClientMimeType() !== 'text/csv' && $file->getClientOriginalExtension() !== 'csv') {
            $this->addFlash('error', 'Le fichier doit être au format CSV');
            return $this->redirectToRoute('app_camion_c_r_u_d_index');
        }

        try {
            $csv = Reader::createFromPath($file->getPathname(), 'r');
            $csv->setHeaderOffset(0);
            $records = $csv->getRecords();

            foreach ($records as $record) {
                $camion = new Camion();
                $camion->setType($record['Type'] ?? '');
                $camion->setStatut($record['Statut'] ?? '');
                $camion->setCapacity((int)($record['Capacity'] ?? 0));
                $camion->setNom($record['Nom'] ?? '');
                $camion->setImage($record['Image'] ?? '');

                $em->persist($camion);
            }

            $em->flush();
            $this->addFlash('success', 'Import réussi ! '.count($csv).' camions importés');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de l\'import: '.$e->getMessage());
        }

        return $this->redirectToRoute('app_camion_c_r_u_d_index');
    }
}