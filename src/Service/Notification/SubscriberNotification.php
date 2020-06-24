<?php

namespace App\Service\Notification;

use App\Entity\MessageToSubscriber;
use App\Form\MessageToSubscriberType;
use App\Repository\SubscriberRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;

class SubscriberNotification {

    private $em;

    private $mailer;

    private $twig;

    private $subscriberRepository;

  public function __construct(SubscriberRepository $subscriberRepository,EntityManagerInterface $em, MailerInterface $mailer, Environment $twig)
  {
     $this->em = $em; 
     $this->mailer = $mailer;
     $this->twig = $twig;
     $this->subscriberRepository = $subscriberRepository;
  }

  public function notifySubscriber(MessageToSubscriber $message){
      $subscribers = $this->subscriberRepository->findAll();

       foreach($subscribers as $subscriber){
         $email = (new Email())
                  ->from("lemathis.79@orange.fr")
                  ->subject($message->getSubject())
                  ->to($subscriber->getEmail())
                  ->html($this->twig->render("email/subscriberMessage.html.twig", [
                    'email' => $message
                  ]))        
         ;
         $this->mailer->send($email);
       }
  }

}