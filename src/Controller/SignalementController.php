<?php

namespace App\Controller;

use App\Entity\Signalement;
use App\Form\SignalementType;
use App\Repository\SignalementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[Route('/signalement')]
final class SignalementController extends AbstractController
{
    #[Route('/', name: 'app_signalement_index')]
    public function indexx(Request $request, SignalementRepository $signalementRepository): Response
    {
        $sort = $request->query->get('sort'); // Récupérer 'sort' sans valeur par défaut
    
        if ($sort) {
            // S'il y a un tri demandé
            $orderBy = match ($sort) {
                'downloads_asc' => ['date_signalement' => 'ASC'], // 🔥 Ascendant
                'downloads_desc' => ['date_signalement' => 'DESC'], // 🔥 Descendant
                default => [], // pas de tri si l'option n'est pas reconnue
            };
        } else {
            // Pas de tri : tout afficher normalement
            $orderBy = [];
        }
    
        // Récupérer les signalements
        $signalements = $signalementRepository->findBy([], $orderBy);
    
        return $this->render('signalement/index.html.twig', [
            'signalements' => $signalements,
            'sort' => $sort,
        ]);
    }

    #[Route('/signalement/image/{id}', name: 'signalement_image', methods: ['GET'])]
    public function image(int $id, SignalementRepository $signalementRepository): Response
    {
    $signalement = $signalementRepository->find($id);

    if (!$signalement || !$signalement->getImage()) {
        throw $this->createNotFoundException('Image non trouvée');
    }

    return new Response(
        stream_get_contents($signalement->getImage()),
        200,
        [
            'Content-Type' => 'image/jpeg', // change si PNG ou autre
            'Content-Disposition' => 'inline'
        ]
    );
    }


    #[Route('/new', name: 'app_signalement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $signalement = new Signalement();
        $form = $this->createForm(SignalementType::class, $signalement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();
    
            if ($imageFile) {
                try {
                    $imageContent = file_get_contents($imageFile->getPathname());
                    $signalement->setImage($imageContent);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors du traitement de l\'image');
                    return $this->redirectToRoute('app_signalement_new');
                }
            }
    
            // Enregistrer le signalement dans la base de données
            $entityManager->persist($signalement);
            $entityManager->flush();
    
            // 🔥 ENVOI DE MAIL
            $email = (new Email())
                ->from('maissasaidani4@gmail.com')
                ->to('maissasaidani4@gmail.com')
                ->subject('Nouveau Signalement Créé')
    
                // Ajouter la date du signalement et la description dans le mail
                ->html('<html>
                    <body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; color: #333;">
                        <div style="background-color: #ffffff; padding: 20px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            <h2 style="text-align: center; color: #3498db;">Nouveau Signalement Créé</h2>
                            <p style="font-size: 16px;">Un nouveau signalement vient d\'être enregistré sur le site.</p>
    
                            <p style="font-size: 16px;"><strong>Date du Signalement : </strong>' . $signalement->getDateSignalement()->format('d/m/Y H:i:s') . '</p>
                            <p style="font-size: 16px;"><strong>Description : </strong>' . nl2br($signalement->getDescription()) . '</p>
                            
                            <p style="font-size: 16px;">Veuillez trouver ci-dessous l\'image du signalement.</p>
                            <img src="cid:signalement_image" alt="Signalement Image" style="max-width: 100%; height: auto;"/>
    
                            <p style="font-size: 12px; color: #7f8c8d; text-align: center;">Ce message a été généré automatiquement par le système.</p>
                        </div>
                    </body>
                </html>');
    
            // Si une image a été téléchargée, l'attacher en tant qu'image inline
            if ($imageFile) {
                $email->attachFromPath($imageFile->getPathname(), 'signalement_image.jpg', 'image/jpeg')
                    ->embedFromPath($imageFile->getPathname(), 'signalement_image'); // On attache l'image avec embedFromPath
            }
    
            // Envoyer l'email
            $mailer->send($email);
            // 🔥 FIN ENVOI DE MAIL
    
            $this->addFlash('success', 'Signalement créé avec succès et email envoyé!');
            return $this->redirectToRoute('app_signalement_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('signalement/new.html.twig', [
            'signalement' => $signalement,
            'form' => $form,
        ]);
    }
    
    #[Route('/{id_signalement}', name: 'app_signalement_show', methods: ['GET'])]
    public function show(SignalementRepository $repository, int $id_signalement): Response
    {
        $signalement = $repository->find($id_signalement);
    
        if (!$signalement) {
            throw $this->createNotFoundException('Signalement non trouvé');
        }
    
        $image = null;
        if ($signalement->getImage()) {
            $imageContent = stream_get_contents($signalement->getImage());
            $image = base64_encode($imageContent);
        }
    
        return $this->render('signalement/show.html.twig', [
            'signalement' => $signalement,
            'image' => $image,
        ]);
    }

    #[Route('/{id_signalement}/edit', name: 'app_signalement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Signalement $signalement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SignalementType::class, $signalement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
          /** @var UploadedFile $imageFile */
$imageFile = $form->get('image')->getData();

if ($imageFile) {
    try {
        // Générez un nom unique pour l'image
        $imageName = uniqid() . '.' . $imageFile->getClientOriginalExtension();
        
        // Déplacez le fichier dans le répertoire des images
        $imageFile->move($this->getParameter('images_directory'), $imageName);
        
        // Enregistrez le nom du fichier dans la base de données
        $signalement->setImage($imageName);
    } catch (\Exception $e) {
        $this->addFlash('error', 'Erreur lors du traitement de l\'image');
        return $this->redirectToRoute('app_signalement_new');
    }
}

    
            // Enregistrer les modifications dans la base de données
            try {
                $entityManager->flush();
                $this->addFlash('success', 'Signalement modifié avec succès!');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la mise à jour du signalement.');
                $this->get('logger')->error('Erreur lors de la mise à jour du signalement: ' . $e->getMessage());
            }
    
            return $this->redirectToRoute('app_signalement_index', [], Response::HTTP_SEE_OTHER);
        }
    
        // Préparation de l'image courante pour l'affichage
        $currentImage = null;
        if ($signalement->getImage()) {
            $imageContent = stream_get_contents($signalement->getImage());
            $currentImage = base64_encode($imageContent);
        }
    
        return $this->render('signalement/edit.html.twig', [
            'signalement' => $signalement,
            'form' => $form,
            'current_image' => $currentImage,
        ]);
    }
    

    #[Route('/{id_signalement}', name: 'app_signalement_delete', methods: ['POST'])]
    public function delete(Request $request, Signalement $signalement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$signalement->getIdSignalement(), $request->request->get('_token'))) {
            $entityManager->remove($signalement);
            $entityManager->flush();
            $this->addFlash('success', 'Signalement supprimé avec succès!');
        } else {
            $this->addFlash('error', 'Token CSRF invalide');
        }

        return $this->redirectToRoute('app_signalement_index', [], Response::HTTP_SEE_OTHER);
    }
    
}