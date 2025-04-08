<?php

namespace App\Form;

use App\Entity\Contribution;
use App\Entity\Projet;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ContributionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('message')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Idée' => 'idée',
                    'Signalement' => 'signalement',
                    'Feedback' => 'feedback',
                ],
                'placeholder' => 'Choisir un type',
            ])
            ->add('date_creation', null, [
                'widget' => 'single_text',
            ])
            ->add('date_creation', null, [
                'widget' => 'single_text',
            ])
            ->add('statut')
            ->add('projet', EntityType::class, [
                'class' => Projet::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contribution::class,
        ]);
    }
}
