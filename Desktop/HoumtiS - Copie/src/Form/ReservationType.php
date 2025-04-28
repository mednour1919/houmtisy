<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numPLACE', IntegerType::class, [
                'label' => 'Numéro de place',
            ])
            ->add('dateReservation', DateType::class, [
                'widget' => 'single_text',  // joli input HTML5
                'input' => 'datetime',       // bien envoyer un objet DateTime
                'html5' => true,
                'label' => 'Date de réservation',
                'attr' => [
                    'min' => (new \DateTime('tomorrow'))->format('Y-m-d'),
                ],
            ])
            ->add('temps', IntegerType::class, [
                'label' => 'Temps (minutes)',
            ])
            ->add('marque', TextType::class, [
                'label' => 'Marque du véhicule',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
