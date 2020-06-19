<?php

namespace App\Controller\Admin;

use App\Repository\DaysRepository;
use App\Repository\StaffRepository;
use App\Service\MenuFilter;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
  public function index(DaysRepository $days){
      return $this->render("admin/administration/index.html.twig", [
          'menu' => $this->menuFilter,
          'today' => date("w") === 0 ? null : $days->find(date("w")),
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