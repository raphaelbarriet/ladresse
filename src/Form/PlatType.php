<?php

namespace App\Form;

use App\Entity\Plat;
use App\Form\ImageType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PlatType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, $this->getOptions("*Nom", "Rentrer le nom du plat que vous voulez"))
            ->add('description', TextareaType::class, $this->getOptions("*Description", "Rentrer une petite description sympa"))
            ->add('ingredient', TextareaType::class, $this->getOptions("*Ingredient", "Renseigner les clients par rapport a la composition de vos aliments "))
            ->add('price', IntegerType::class, $this->getOptions("*Prix", "", ["attr" => ["min" => 1, "max" => "100"]]))
            ->add('category')
            ->add('menu')
            ->add('images', CollectionType::class,['entry_type' => ImageType::class, "allow_add" => true, "allow_delete" => true, 'by_reference'  => false, 'delete_empty'  => true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Plat::class,
        ]);
    }
}
