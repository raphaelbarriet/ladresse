<?php

namespace App\Controller\User;

use App\Entity\Plat;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PlatController extends AbstractController {

    /** 
     * @Route("/carte/{slug}", name="plat.show")
    */
   public function show(Plat $plat){
     return $this->render('navigation/show.html.twig', [
         "plat" => $plat,
     ]);
   }

}