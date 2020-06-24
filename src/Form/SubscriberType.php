<?php

namespace App\Form;

use App\Entity\Subscriber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubscriberType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, $this->getOptions('Email', "Rentrer votre email"))
            ->add('firstname', TextType::class, $this->getOptions("Prenom", "Rentrez votre prenoms"))
            ->add('lastname', TextType::class, $this->getOptions("Nom", "Rentrez votre nom."))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Subscriber::class,
        ]);
    }
}
