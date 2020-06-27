<?php

namespace App\Controller\Admin;

use App\Entity\Cocktail;
use App\Form\CocktailsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class CocktailsGestionController extends AbstractController {

  private $em;

  public function __construct(EntityManagerInterface $em)
  {
      $this->em = $em; 
  }

  /** 
   * @Route("/admin/cocktail/add", name="cocktail.add")
  */
  public function add(Request $request){
    $cocktail = new Cocktail();
    $form = $this->createForm(CocktailsType::class, $cocktail);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
      $this->em->persist($cocktail);
      $this->em->flush();
      $this->addFlash('success', 'Le cocktail a bien été creée');
      return $this->redirectToRoute("administration.cocktails");
    }

    return $this->render("admin/administration/form/cocktail_create.html.twig", [
      'form' => $form->createView(),
    ]);

  }

  /** 
   * @Route("/admin/cocktail/update/{id}", name="cocktails.update")
  */
  public function update(Cocktail $cocktail, Request $request){
    $form = $this->createForm(CocktailsType::class, $cocktail);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
      $this->em->flush();
      $this->addFlash("success", "Votre cocktail a bien été modifié");
      return $this->redirectToRoute("administration.cocktails");
    }

    return $this->render("admin/administration/form/cocktail_update.html.twig", [
      'form' => $form->createView(),
    ]);
  }

  /** 
   * @Route("/admin/cocktail/remove/{id}", name="cocktails.remove")
  */
  public function remove(Cocktail $cocktail){
     $this->em->remove($cocktail);
     $this->em->flush();
     return $this->redirectToRoute("administration.cocktails");
  }

}