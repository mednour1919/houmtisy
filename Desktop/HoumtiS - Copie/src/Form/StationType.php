<?php

namespace App\Form;

use App\Entity\Station;
// Dans StationType.php

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomStation', TextType::class, [
                'label' => 'Nom de la station'
            ])
            ->add('capacite', IntegerType::class, [
                'label' => 'Capacité'
            ])
            ->add('zone', ChoiceType::class, [
                'label' => 'Zone',
                'choices' => [
                    'Nord' => 'Nord',
                    'Sud' => 'Sud',
                    'Est' => 'Est',
                    'Ouest' => 'Ouest',
                    'Centre' => 'Centre',
                ]
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'Actif' => 'Actif',
                    'Inactif' => 'Inactif',
                    'En maintenance' => 'En maintenance',
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
