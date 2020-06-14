<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;

class ApplicationType extends AbstractType {

    public function getOptions(string $label = null, string $placeholder = "null", array $options = []){
         $default = [
             "label" => $label,
             "attr" => [
                 "placeholder" => $placeholder,
             ]
        ];

        return array_merge_recursive($default, $options);
    }

}