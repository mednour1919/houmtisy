<?php

namespace App\Form;

use App\Entity\Station;
// Dans StationType.php

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomStation', TextType::class, [
                'label' => 'Nom de la station',
                'attr' => [
                    'placeholder' => 'Entrez le nom de la station'
                ]
            ])
            ->add('capacite', NumberType::class, [
                'label' => 'Capacité',
                'attr' => [
                    'placeholder' => 'Entrez la capacité de la station'
                ]
            ])
            ->add('zone', ChoiceType::class, [
                'choices' => [
                    'Nord' => 'Nord',
                    'Sud' => 'Sud',
                    'Est' => 'Est',
                    'Ouest' => 'Ouest',
                    'Centre' => 'Centre'
                ],
                'label' => 'Zone'
            ])
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Actif' => 'Actif',
                    'Inactif' => 'Inactif',
                    'En maintenance' => 'En maintenance'
                ],
                'label' => 'Statut'
            ])
            ->add('latitude', NumberType::class, [
                'label' => 'Latitude',
                'scale' => 6,
                'attr' => [
                    'placeholder' => 'Cliquez sur la carte pour définir la latitude',
                    'step' => 'any'
                ]
            ])
            ->add('longitude', NumberType::class, [
                'label' => 'Longitude',
                'scale' => 6,
                'attr' => [
                    'placeholder' => 'Cliquez sur la carte pour définir la longitude',
                    'step' => 'any'
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Enregistrer'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Station::class,
        ]);
    }
}
