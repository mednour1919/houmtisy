<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login', methods: ['GET', 'POST'])]
    public function login(Request $request, EntityManagerInterface $em, SessionInterface $session, TokenStorageInterface $tokenStorage): Response
    {
        if ($request->isMethod('POST')) {
            $username = $request->request->get('username');
            $password = $request->request->get('password');

            $user = $em->getRepository(User::class)->findOneBy(['username' => $username]);

            if ($user && $user->getPassword() === $password) { // Consider hashing!
                $token = new UsernamePasswordToken($user, 'main', $user->getRoles());
                $tokenStorage->setToken($token);

                $session->set('user_id', $user->getId());

                if (in_array('ROLE_ADMIN', $user->getRoles())) {
                    return $this->redirectToRoute('app_dashboard');
                } else {
                    return $this->redirectToRoute('app_signalement_index');
                }
            }

            $error = 'Invalid username or password';
            return $this->render('User/login.html.twig', [
                'error' => $error,
            ]);
        }

        return $this->render('User/login.html.twig');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->remove('user_id');
        return $this->redirectToRoute('app_login');
    }

    #[Route('/forgot-password', name: 'app_forgot_password', methods: ['GET', 'POST'])]
    public function forgotPassword(
        Request $request,
        EntityManagerInterface $em,
        SessionInterface $session,
        MailerInterface $mailer
    ): Response {
        if ($request->isMethod('POST')) {
            $username = $request->request->get('username');
            $user = $em->getRepository(User::class)->findOneBy(['username' => $username]);

            if ($user) {
                if (!$user->getEmail()) {
                    return $this->render('User/forgot_password.html.twig', [
                        'error' => 'This user does not have an email address associated with it.',
                    ]);
                }

                $resetCode = bin2hex(random_bytes(8));

                $session->set('reset_code', $resetCode);
                $session->set('reset_user_id', $user->getId());

                $email = (new Email())
                    ->from('asaidani782@gmail.com')
                    ->to($user->getEmail())
                    ->subject('Password Reset Request')
                    ->text("
Hello {$user->getUsername()},

We received a request to reset your password. Please use the following code to complete the process:

$resetCode

If you did not request a password reset, please ignore this email or contact our support team if you have any concerns.

This code will expire in 1 hour for security reasons.

Thank you,
Your Application Team
");

try {
    $mailer->send($email);

    return $this->redirectToRoute('app_verify_reset_code');

                } catch (\Exception $e) {
                    return $this->render('User/forgot_password.html.twig', [
                        'error' => 'Failed to send email: ' . $e->getMessage()
                    ]);
                }
            }

            return $this->render('User/forgot_password.html.twig', [
                'error' => 'Username not found.',
            ]);
        }

        return $this->render('User/forgot_password.html.twig');
    }

    private function maskEmail(string $email): string
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            list($username, $domain) = explode('@', $email);
            $username = substr($username, 0, 2) . str_repeat('*', strlen($username) - 2);
            return $username . '@' . $domain;
        }
        return $email;
    }
    #[Route('/verify-reset-code', name: 'app_verify_reset_code', methods: ['GET', 'POST'])]
public function verifyResetCode(Request $request, SessionInterface $session): Response
{
    if ($request->isMethod('POST')) {
        $enteredCode = $request->request->get('reset_code');
        $sessionCode = $session->get('reset_code');

        if ($enteredCode === $sessionCode) {
            return $this->redirectToRoute('app_reset_password');
        }

        return $this->render('User/verify_code.html.twig', [
            'error' => 'Invalid verification code.'
        ]);
    }

    return $this->render('User/verify_reset_code.html.twig');
}

}
