<?php

namespace App\Controller\User;

use App\Entity\Subscriber;
use App\Form\SubscriberType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class NewsletterController extends AbstractController {

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/newsletter", name="newsletter.subscribe")
     */
    public function newsletter(Request $request){
        $subscriber = new Subscriber();
        $form = $this->createForm(SubscriberType::class, $subscriber);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->em->persist($subscriber);
            $this->em->flush();
            $this->addFlash("success", "Vous êtes maintenant bien inscrit.");
        }
        return $this->render("navigation/newsletter.html.twig", [
            'form' => $form->createView(),
        ]);
    }
}