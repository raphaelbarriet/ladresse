<?php

namespace App\Controller\User;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Service\Notification\ContactNotification;
use Monolog\Handler\SwiftMailerHandler;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class InformationController extends AbstractController {

/** 
 * @Route("/restaurant/information", name="information.index")
*/
public function information(Request $request, ContactNotification $notification){
    $contact = new Contact();
    $form = $this->createForm(ContactType::class , $contact);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
       $notification->notify($contact);
       $this->addFlash("success", "Votre email a bien été envoyé!");
       return $this->redirectToRoute("information.index");
    }

    return $this->render("navigation/information.html.twig", [
        "form" => $form->createView(),
    ]);
}

}