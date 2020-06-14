<?php

namespace App\Controller\Admin;

use App\Entity\Plat;
use App\Form\PlatType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class CartGestionController extends AbstractController {

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
      $this->em = $em;  
    }

  /** 
   * @Route("/admin/add", name="gestion.add")
  */
   public function add(Request $request){

      $plat = new Plat();
      $form = $this->createForm(PlatType::class, $plat);
      
      $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
          $this->em->persist($plat);
          $this->em->flush();
          $this->addFlash('success' , "votre plat a bien été enregistrer");
          return $this->redirectToRoute("administartion.index");
       }

      return $this->render('admin/administration/plat_form.html.twig', [
        "form" => $form->createView(),
      ]);
   }

   /** 
    * @Route("/admin/update/{slug}", name="gestion.update")
   */
   public function update( Request $request,Plat $plat){
      $form = $this->createForm(PlatType::class, $plat);
      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
        $this->em->flush();
        return $this->redirectToRoute("administartion.menu");
      }
      return $this->render('admin/administration/plat_form.html.twig', [
        "form" => $form->createView(),
      ]);
   }

   /** 
    * @Route("/admin/remove/{slug}", name="gestion.remove")
   */
   public function remove(Plat $plat){
     $this->em->remove($plat);
     $this->em->flush();
     return $this->redirectToRoute("administartion.menu");
   }

}