<?php

namespace App\Controller;

use App\Entity\Contribution;
use App\Form\ContributionType;
use App\Repository\ContributionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contribution')]
class ContributionController extends AbstractController
{
    #[Route('/', name: 'app_contribution_index', methods: ['GET'])]
   // Dans ContributionController.php
public function index(ContributionRepository $repo): Response
{
    $contributions = $repo->createQueryBuilder('c')
        ->select('c', 'p') // c pour Contribution, p pour Projet
        ->join('c.projet', 'p')
        ->getQuery()
        ->getResult();
    
    return $this->render('contribution/index.html.twig', [
        'contributions' => $contributions,
    ]);
}

#[Route('/new', name: 'app_contribution_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $em): Response
{
    $contribution = new Contribution();
    $form = $this->createForm(ContributionType::class, $contribution);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Ajoutez cette ligne pour définir la date automatiquement
        $contribution->setDateCreation(new \DateTime());
        
        $em->persist($contribution);
        $em->flush();
        
        $this->addFlash('success', 'Contribution ajoutée avec succès!');
        return $this->redirectToRoute('app_contribution_index');
    }

    return $this->render('contribution/new.html.twig', [
        'form' => $form->createView(),
    ]);
}
    #[Route('/{id}', name: 'app_contribution_show', methods: ['GET'])]
    public function show(Contribution $contribution): Response
    {
        return $this->render('contribution/show.html.twig', [
            'contribution' => $contribution,
        ]);
    }
    #[Route('/{id}/edit', name: 'app_contribution_edit', methods: ['GET','POST'])]
    public function edit(Request $request, Contribution $c, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ContributionType::class, $c);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Mise à jour réussie');
            return $this->redirectToRoute('app_contribution_index');
        }

        return $this->render('contribution/edit.html.twig', [
            'form' => $form->createView(),
            'contribution' => $c,
        ]);
    }

    #[Route('/{id}', name: 'app_contribution_delete', methods: ['POST'])]
    public function delete(Request $request, Contribution $c, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$c->getId(), $request->request->get('_token'))) {
            $em->remove($c);
            $em->flush();
            $this->addFlash('success', 'Supprimée avec succès');
        }
        return $this->redirectToRoute('app_contribution_index');
    }
    
}
