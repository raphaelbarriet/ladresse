<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, $this->getOptions("Nom", "Entrer un nom s'il vous plait"))
            ->add('email', EmailType::class, $this->getOptions('Email', "Rentrer un email valide."))
            ->add('subject', TextType::class, $this->getOptions('Sujet', "Veuillez remplir le motif du message"))
            ->add('message', TextareaType::class, $this->getOptions("Message", "Veuillez remplir le message qui ser envoyée!"))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
