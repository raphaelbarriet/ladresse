<?php

namespace App\Controller\Admin;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartGestionController extends AbstractController {

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
      $this->em = $em;  
    }

}