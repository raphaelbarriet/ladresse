<?php

namespace App\Service\Notification;

use App\Entity\Contact;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;

class ContactNotification {


    private $twig;

    private $mailer;

    public function __construct(Environment $twig, MailerInterface $mailer)
    {
       $this->twig = $twig;
       $this->mailer = $mailer;
    }

    public function notify(Contact $contact){
       
        $message = (new Email())
                     ->from($contact->getEmail())
                     ->subject("Restaurant : " . $contact->getSubject())
                     ->to('lemathis.79@orange.fr')
                     ->replyTo($contact->getEmail())
                     ->html($this->twig->render('email/contact.html.twig', [
                         'contact' => $contact,
                     ]));
                     //adress richard lemathis.79@orange.fr
        ;

       $this->mailer->send($message);

    }


}