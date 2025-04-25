<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $users = $em->getRepository(User::class)->findAll();

        return $this->render('dashboard/index.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/user/delete/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(int $id, EntityManagerInterface $em, Request $request): Response
    {
        $user = $em->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $submittedToken = $request->request->get('_token');

        if ($this->isCsrfTokenValid('delete-user-' . $id, $submittedToken)) {
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/user/update-role/{id}', name: 'app_user_role_update', methods: ['POST'])]
    public function updateRole(int $id, Request $request, EntityManagerInterface $em): Response
    {
        // Optional: Allow only admins to modify roles
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Only admins can change roles.');
        }

        $user = $em->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $submittedToken = $request->request->get('_token');

        if ($this->isCsrfTokenValid('update-role-' . $id, $submittedToken)) {
            $newRole = $request->request->get('role');
            $user->setRoles([$newRole]);
            $em->flush();
        }

        return $this->redirectToRoute('app_dashboard');
    }
}
