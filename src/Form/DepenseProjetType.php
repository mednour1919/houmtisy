<?php

namespace App\Form;

use App\Entity\DepenseProjet;
use App\Entity\Projet;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType; // Corrected the namespace
use App\Form\FloatToStringTransformer;

class DepenseProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('montant', NumberType::class, [
                'label' => 'Montant (€)',
                'attr' => [
                    'step' => '0.01',
                    'min' => '0',
                    'placeholder' => '0.00',
                ],
                'html5' => true,
                'scale' => 2,
                'required' => true,
                'input' => 'string', // Ajoutez cette ligne
            ])
            ->add('description')
            ->add('date_depense', null, [
                'widget' => 'single_text',
            ])
            ->add('projet', EntityType::class, [
                'class' => Projet::class,
                'choice_label' => 'id',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DepenseProjet::class,
        ]);
    }
}
