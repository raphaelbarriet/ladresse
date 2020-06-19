<?php

namespace App\Form;

use App\Entity\OpeningTime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OpeningTimeType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('open', IntegerType::class, $this->getOptions("Ouverture", "Rentrer l'heure d'ouverture", ["attr" => ["min" => 0, "max" => "24"]]))
            ->add('closed', IntegerType::class, $this->getOptions("Fermeture", "Rentrer l'heure de fermeture.", ["attr" => ["min" => 0, "max" => "24"]]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OpeningTime::class,
        ]);
    }
}
