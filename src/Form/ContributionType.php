<?php

namespace App\Form;

use App\Entity\Contribution;
use App\Entity\Projet;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContributionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('projet', EntityType::class, [
                'class' => Projet::class,
                'choice_label' => 'nom',
                'placeholder' => 'Choisissez un projet',
                'constraints' => [new NotBlank(message: 'Le projet est obligatoire')],
            ])
            ->add('message', TextareaType::class, [
                'constraints' => [new NotBlank(message: 'Le message ne peut pas être vide')],
                'attr' => ['rows' => 5],
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Idée' => 'idée',
                    'Signalement' => 'signalement',
                    'Feedback' => 'feedback',
                ],
                'placeholder' => 'Choisissez un type',
                'constraints' => [new NotBlank(message: 'Le type est obligatoire')],
            ])
            // champ dateCreation supprimé
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'En attente' => 'en_attente',
                    'Validé'     => 'validé',
                    'Rejeté'     => 'rejeté',
                ],
                'required'    => false,
                'placeholder' => '—',
                'help'        => 'Optionnel',
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
