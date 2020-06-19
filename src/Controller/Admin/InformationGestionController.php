<?php

namespace App\Controller\Admin;

use App\Entity\Days;
use App\Entity\Staff;
use App\Form\OpeningTimeType;
use App\Form\StaffType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class InformationGestionController extends AbstractController {

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/admin/information/{id}", name="day.update")
     */
    public function update_horaire(Days $day, Request $request)
    {
        $form = $this->createForm(OpeningTimeType::class, $day->getOpenHours());
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            $this->addFlash("success", "Les horaires ont été modifié avec succees");
            return $this->redirectToRoute("administration.info");
        }

        return $this->render("admin/administration/form/horaire_form.html.twig", [
            'day' => $day,
            'form' => $form->createView(),
        ]);
    }

    /** 
     * @Route("/admin/create/staff", name="staff.create")
     */
    public function create_staff(Request $request){
        $staff = new Staff();
        $form = $this->createForm(StaffType::class, $staff);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
          $this->em->persist($staff);
          $this->em->flush();
          $this->addFlash("success", "Un nouveau menbre du staff a été crée félicitation!");
          return $this->redirectToRoute("administration.info");
        }

        return $this->render("admin/administration/form/staff_create.html.twig", [
            'form' => $form->createView(),        
            ]);
    }

    /** 
     * @Route("/admin/staff/remove/{id}", name="staff.delete")
    */
    public function remove_staff(Staff $staff){
       $this->em->remove($staff);
       $this->em->flush();
       return $this->redirectToRoute("administration.info");
    }

    /** 
     * @Route("/admin/staff/update/{name}", name="staff.update")
    */
    public function update_staff(Staff $staff, Request $request){
       $form = $this->createForm(StaffType::class, $staff);
       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
           $this->em->flush();
           $this->addFlash('success', "La bio a bien été modifié");
           return $this->redirectToRoute("administration.info");
       }

       return $this->render("admin/administration/form/staff_update.html.twig", [
           'form' => $form->createView(),
       ]);
    }


}