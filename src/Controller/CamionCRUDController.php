<?php

namespace App\Controller;

use App\Entity\Camion;
use App\Form\CamionType;
use App\Repository\CamionRepository;
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
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/camioncl')]
final class CamionCRUDController extends AbstractController
{
    #[Route(name: 'app_camion_c_r_u_d_index', methods: ['GET'])]
    public function index(CamionRepository $repository, Request $request): Response
    {
        $searchTerm = $request->query->get('q');
        
        $query = $repository->createQueryBuilder('c');
        
        if ($searchTerm) {
            $query->where('c.nom LIKE :term OR c.type LIKE :term OR c.statut LIKE :term')
                  ->setParameter('term', '%'.$searchTerm.'%');
        }

        $camions = $query->getQuery()->getResult();

        if ($request->isXmlHttpRequest()) {
            $camionsArray = array_map(function($camion) {
                return [
                    'id' => $camion->getId(),
                    'nom' => $camion->getNom(),
                    'type' => $camion->getType(),
                    'statut' => $camion->getStatut(),
                    'capacity' => $camion->getCapacity(),
                    'image' => $camion->getImage(),
                ];
            }, $camions);
            
            return new JsonResponse(['camions' => $camionsArray]);
        }

        return $this->render('camion_crud/index.html.twig', [
            'camions' => $camions,
            'search_term' => $searchTerm,
        ]);
    }

    #[Route('/export', name: 'app_camion_export', methods: ['GET'])]
    public function exportToExcel(CamionRepository $repository): BinaryFileResponse
    {
        $camions = $repository->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Type');
        $sheet->setCellValue('C1', 'Statut');
        $sheet->setCellValue('D1', 'Capacity');
        $sheet->setCellValue('E1', 'Nom');
        $sheet->setCellValue('F1', 'Image');

        $row = 2;
        foreach ($camions as $camion) {
            $sheet->setCellValue('A'.$row, $camion->getId());
            $sheet->setCellValue('B'.$row, $camion->getType());
            $sheet->setCellValue('C'.$row, $camion->getStatut());
            $sheet->setCellValue('D'.$row, $camion->getCapacity());
            $sheet->setCellValue('E'.$row, $camion->getNom());
            $sheet->setCellValue('F'.$row, $camion->getImage());
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'camions_export_'.date('Y-m-d').'.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($tempFile);

        $response = new BinaryFileResponse($tempFile);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $fileName
        );

        return $response;
    }

    #[Route('/import', name: 'app_camion_import', methods: ['POST'])]
    public function importFromExcel(Request $request, EntityManagerInterface $entityManager, CamionRepository $camionRepository): Response
    {
        $uploadedFile = $request->files->get('excel_file');
    
        if ($uploadedFile) {
            $reader = new XlsxReader();
            $spreadsheet = $reader->load($uploadedFile->getPathname());
            $sheet = $spreadsheet->getActiveSheet();
    
            $rows = $sheet->toArray();
            array_shift($rows);
    
            $importedCount = 0;
            $skippedCount = 0;
    
            foreach ($rows as $row) {
                $existingCamion = $camionRepository->findOneBy([
                    'type' => $row[1] ?? '',
                    'nom' => $row[4] ?? '',
                    'statut' => $row[2] ?? ''
                ]);
    
                if (!$existingCamion) {
                    $camion = new Camion();
                    $camion->setType($row[1] ?? '');
                    $camion->setStatut($row[2] ?? '');
                    $camion->setCapacity($row[3] ?? null);
                    $camion->setNom($row[4] ?? '');
                    $camion->setImage($row[5] ?? null);
    
                    $entityManager->persist($camion);
                    $importedCount++;
                } else {
                    $skippedCount++;
                }
            }
    
            $entityManager->flush();
            
            $this->addFlash('success', sprintf(
                'Import terminé : %d nouveaux camions ajoutés, %d doublons ignorés',
                $importedCount,
                $skippedCount
            ));
        } else {
            $this->addFlash('error', 'Veuillez sélectionner un fichier Excel.');
        }
    
        return $this->redirectToRoute('app_camion_c_r_u_d_index');
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

    #[Route('/api/search', name: 'app_camion_search', methods: ['GET'])]
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
                'id' => $camion->getId(),
                'text' => $camion->getNom(),
                'type' => $camion->getType(),
                'statut' => $camion->getStatut()
            ];
        }, $camions);
        
        return $this->json(['results' => $results]);
    }
}