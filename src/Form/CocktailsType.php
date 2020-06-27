<?php

namespace App\Form;

use App\Entity\Cocktail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CocktailsType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, $this->getOptions('Nom', 'Donner un nom au cocktail'))
            ->add('description', TextareaType::class, $this->getOptions('Description', "Decriver le cocktail de la meilleur façon"))
            ->add('ingredients', TextType::class, $this->getOptions('Ingredients', "Expliquer de quoi est composée le cocktails"))
            ->add('imageFile', FileType::class)
            ->add('alcohol', CheckboxType::class, $this->getOptions('Alcool', "", ['required' => false]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cocktail::class,
        ]);
    }
}
