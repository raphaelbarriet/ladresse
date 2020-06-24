<?php

namespace App\Form;

use App\Entity\Staff;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StaffType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, $this->getOptions("Nom", "Rentre votre nom"))
            ->add('Statu', TextType::class, $this->getOptions('Status', "Rentrer votre status. ex : Chef"))
            ->add('imageFile', FileType::class, $this->getOptions('Photo', "fichier image"))
            ->add('description', TextareaType::class, $this->getOptions('Description', 'Rentrer une petite description syma sur vous même!'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Staff::class,
        ]);
    }
}
