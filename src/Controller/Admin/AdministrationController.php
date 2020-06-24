<?php

namespace App\Controller\Admin;

use App\Entity\MessageToSubscriber;
use App\Form\MessageToSubscriberType;
use App\Repository\DaysRepository;
use App\Repository\StaffRepository;
use App\Repository\SubscriberRepository;
use App\Service\MenuFilter;
use App\Service\Notification\SubscriberNotification;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class AdministrationController extends AbstractController {

    private $em;

    private $menuFilter;

  public function __construct(EntityManagerInterface $em, MenuFilter $menuFilter)
  {
      $this->em = $em;
      $this->menuFilter = $menuFilter;
  }

  /** 
   * @Route("/admin", name="administration.index")
  */
  public function index(DaysRepository $days, Request $request, SubscriberRepository $subscriber, SubscriberNotification $notification){

      $message = new MessageToSubscriber();
      $form = $this->createForm(MessageToSubscriberType::class, $message);
      $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $notification->notifySubscriber($message);
            $this->addFlash("success", "Votre email a bien été envoyé a tous les utilisateur!");
        }

      return $this->render("admin/administration/index.html.twig", [
          'menu' => $this->menuFilter,
          'today' => date("w") === 0 ? null : $days->find(date("w")),
          'form' => $form->createView(),
          "subscriber" => count($subscriber->findAll()),
      ]);
  }

  /** 
   * @Route("/admin/menu", name="administration.menu")
  */
  public function menu(){
      return $this->render("admin/administration/menu.html.twig", [
          'menu' => $this->menuFilter->getMenu('menu'),
          'dayMenu' => $this->menuFilter->getMenu('menu du jour')
      ]);
  }

  /** 
   * @Route("/admin/info", name="administration.info")
  */
  public function info(DaysRepository $days, StaffRepository $staff) {
     return $this->render("admin/administration/info.html.twig", [
         "days" => $days->findAll(),
         "staff" => $staff->findAll(),
     ]);
  }


}