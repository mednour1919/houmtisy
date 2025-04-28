<?php

namespace App\Form;

use App\Entity\Signalement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Image;


class SignalementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type_signalement', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le type de signalement est obligatoire']),
                    new Assert\Length([
                        'min' => 3,
                        'max' => 255,
                        'minMessage' => 'Le type doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le type ne peut pas dépasser {{ limit }} caractères'
                    ]),
                    new Assert\Regex([
                        'pattern' => "/^[a-zA-Z0-9\s\-éèêëàâäôöûüçÉÈÊËÀÂÄÔÖÛÜÇ]+$/",
                        'message' => 'Caractères spéciaux non autorisés (seuls lettres, chiffres, espaces et tirets)'
                    ])
                ]
            ])
            ->add('description', TextareaType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La description est obligatoire']),
                    new Assert\Length([
                        'min' => 10,
                        'max' => 5000,
                        'minMessage' => 'La description doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'La description ne peut pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('date_signalement', DateTimeType::class, [
                'widget' => 'single_text',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La date est obligatoire']),
                    new Assert\LessThanOrEqual([
                        'value' => 'now',
                        'message' => 'La date ne peut pas être dans le futur'
                    ])
                ]
            ])
            
            ->add('image', FileType::class, [
                'mapped' => false,
                'required' => false,
                'label' => 'Image du signalement',
                'constraints' => [
                    new Image([
                        'mimeTypes' => ['image/jpeg', 'image/png'],
                        'maxSize' => '5M',
                    ])
                ],
            ])
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'En attente' => 'en_attente',
                    'En cours' => 'en_cours',
                    'Résolu' => 'resolu',
                    'Fermé' => 'ferme',
                    'Rejeté' => 'rejete'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le statut est obligatoire']),
                    new Assert\Choice([
                        'choices' => ['en_attente', 'en_cours', 'resolu', 'ferme', 'rejete'],
                        'message' => 'Statut invalide'
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Signalement::class,
            'attr' => ['novalidate' => 'novalidate'] // Désactive la validation HTML5 pour tester la validation Symfony
        ]);
    }
}