<?php

namespace App\Controller\User;

use App\Repository\CocktailRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CocktailController extends AbstractController {

    /**
     * @Route("/cocktail", name="cocktail.menu")
     */
    public function cocktailMenu(CocktailRepository $cocktailRepository){
      return $this->render('navigation/cocktail.html.twig', [
        'cocktails' => $cocktailRepository->findAll(),
      ]);
    }


}