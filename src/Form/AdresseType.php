<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Adresse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdresseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
        
        
            
            ->add('adrnom', options:[
                'label' => 'Nom'
            ])
            ->add('adrprenom', options:[
                'label' => 'Prénom'
            ])
            ->add('adresse', options:[
                'label' => 'Adresse'
            ])
            ->add('adrcp', options:[
                'label' => 'Code postal'
            ])
            ->add('adrville', options:[
                'label' => 'Ville'
            ])
            ->add('adrpays', options:[
                'label' => 'Pays'
            ])
            ->add('adrtel', options:[
                'label' => 'Téléphone'
            ])
            ->add('adremail', options:[
                'label' => 'Email'
            ])
            
            ->add('users', EntityType::class, [
                'class' => Users::class,
                'choice_label' =>'Nom'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Adresse::class,
        ]);
    }
}

