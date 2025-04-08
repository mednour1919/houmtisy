<?php

namespace App\Form;

use App\Entity\Fournisseur;
use App\Entity\Projet;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => [
                    'placeholder' => 'Nom du projet',
                    'class' => 'form-control'
                ],
                'label' => 'Nom du projet *',
                'required' => true
            ])
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'Proposé' => 'proposé',
                    'Planifié' => 'planifié',
                    'En cours' => 'en cours',
                    'Suspendu' => 'suspendu',
                    'Terminé' => 'terminé'
                ],
                'placeholder' => 'Sélectionnez un statut',
                'attr' => ['class' => 'form-select'],
                'label' => 'Statut *',
                'required' => true
            ])
            ->add('budget', NumberType::class, [
                'scale' => 2,
                'html5' => true,
                'attr' => [
                    'step' => '0.01',
                    'min' => '0',
                    'placeholder' => '0.00',
                    'class' => 'form-control'
                ],
                'label' => 'Budget (€) *'
            ])
            ->add('depense', NumberType::class, [
                'scale' => 2,
                'html5' => true,
                'attr' => [
                    'step' => '0.01',
                    'min' => '0',
                    'placeholder' => '0.00',
                    'class' => 'form-control'
                ],
                'label' => 'Dépense (€)',
                'required' => false
            ])
            ->add('dateDebut', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'label' => 'Date de début *',
                'html5' => true
            ])
            ->add('dateFin', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'label' => 'Date de fin *',
                'html5' => true
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'attr' => [
                    'rows' => 3,
                    'class' => 'form-control',
                    'placeholder' => 'Description du projet...'
                ],
                'label' => 'Description'
            ])
            ->add('fournisseur', EntityType::class, [
                'class' => Fournisseur::class,
                'choice_label' => 'nom',
                'placeholder' => 'Sélectionnez un fournisseur',
                'attr' => ['class' => 'form-select'],
                'label' => 'Fournisseur',
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Projet::class,
        ]);
    }
}