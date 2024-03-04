<?php

namespace App\Form;

use App\Entity\Adresse;
use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $options['user'];
        $builder
            ->add('adresse', EntityType::class, [
                'class' => Adresse::class,
                'label' => false,
                'required' => true,
                'multiple' => false,
                //'choices' => $user->getAdresse(),
                'expanded' => true,

            
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'user' => [], // Assurez-vous qu'une virgule soit présente ici pour corriger l'erreur de syntaxe
            'data_class' => Commande::class,
        ]);
    }
}
