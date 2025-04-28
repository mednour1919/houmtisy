<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Dompdf\Options; 
use Dompdf\Dompdf;

#[Route('/reponse')]
class ReponseController extends AbstractController
{
    #[Route('/', name: 'app_reponse_index', methods: ['GET'])]
    public function index(Request $request, ReponseRepository $reponseRepository): Response
    {
        // Récupérer le paramètre de recherche
        $search = $request->query->get('search');
        
        if ($search) {
            // Recherche des réponses filtrées par statut
            $reponses = $reponseRepository->findByStatut($search);
        } else {
            // Récupérer toutes les réponses si aucune recherche n'est effectuée
            $reponses = $reponseRepository->findAll();
        }
    
        if ($request->isXmlHttpRequest()) {
            // Rendre le tableau partiel pour la réponse AJAX
            return $this->render('reponse/_table.html.twig', [
                'reponses' => $reponses,
            ]);
        }
    
        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponses,
        ]);
    }

    #[Route('/new', name: 'app_reponse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reponse);
            $entityManager->flush();

            $this->addFlash('success', 'La réponse a été créée avec succès.');
            return $this->redirectToRoute('app_reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        // ✅ Correction : passer la variable 'signalement' à Twig
        $signalement = $reponse->getSignalement();

        return $this->render('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
            'signalement' => $signalement,
        ]);
    }

    #[Route('/{id_reponse}', name: 'app_reponse_show', methods: ['GET'])]
    public function show(Reponse $reponse): Response
    {
        return $this->render('reponse/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    #[Route('/{id_reponse}/edit', name: 'app_reponse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReponseType::class, $reponse, [
            'action' => $this->generateUrl('app_reponse_edit', ['id_reponse' => $reponse->getIdReponse()]),
            'method' => 'POST'
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reponse->setDateReponse(new \DateTime());
            $entityManager->flush();

            $this->addFlash('success', 'La réponse a été mise à jour avec succès.');
            return $this->redirectToRoute('app_reponse_show', ['id_reponse' => $reponse->getIdReponse()]);
        }

        return $this->render('reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id_reponse}', name: 'app_reponse_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponse->getIdReponse(), $request->request->get('_token'))) {
            $entityManager->remove($reponse);
            $entityManager->flush();
            $this->addFlash('success', 'La réponse a été supprimée avec succès.');
        }

        return $this->redirectToRoute('app_reponse_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/Reponse/download/{id_reponse}', name: 'reponse_download')]
    public function downloadPdf(int $id_reponse, ReponseRepository $reponseRepository, EntityManagerInterface $entityManager): Response
    {
        // 🔹 Récupérer le cours depuis la base de données
        $reponse = $reponseRepository->find($id_reponse);
    
        // Vérifier si le cours existe
        if (!$reponse) {
            throw $this->createNotFoundException('Reponse non trouvé');
        }

       

        // 🔹 Configurer DomPDF
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
    
        $dompdf = new Dompdf($pdfOptions);
    
        // 🔹 Générer le HTML avec les données du cours
        $html = $this->renderView('reponse/pdf.html.twig', [
            'reponse' => $reponse
        ]);
    
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        // 🔹 Télécharger le PDF avec un nom dynamique
        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="reponse_' . $reponse->getIdReponse() . '.pdf"',
            ]
        );
    }
}