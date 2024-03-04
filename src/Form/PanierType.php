<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PanierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('formedeboxe', TextType::class, [
                'label' => 'Nom du formedeboxe',
            ])
            ->add('quantite', IntegerType::class, [
                'label' => 'Quantité',
            ])
            // Ajoutez d'autres champs si nécessaire
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Ajoutez les options par défaut pour le type PanierType si nécessaire
        ]);
    }
}
