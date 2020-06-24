<?php

namespace App\Form;

use App\Entity\MessageToSubscriber;
use DateTime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageToSubscriberType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("date", DateType::class, $this->getOptions("Date", "Rentrer la date de l'email", [ 'widget' => 'single_text']))
            ->add('subject', TextType::class, $this->getOptions("Sujet", "Rentret le sujet de votre email!"))
            ->add("title", TextType::class, $this->getOptions('Titre', "Rentrer le titre de votre mail"))
            ->add('message', TextareaType::class, $this->getOptions('Message', "Rentrer le contenu de l'email"))
            ->add("place", TextType::class, $this->getOptions('Lieux', "Rentrer le lieux"))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MessageToSubscriber::class,
        ]);
    }
}
