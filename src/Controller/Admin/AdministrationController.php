<?php

namespace App\Controller\Admin;

use App\Service\MenuFilter;
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
  public function index(){
      return $this->render("admin/administration/index.html.twig", [
          'menu' => $this->menuFilter,
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
  public function info() {
     return $this->render("admin/administration/info.html.twig");
  }

  /** 
   * @Route("/admin/horaire", name="administration.horaire")
  */
  public function horaire(){
     return $this->render("admin/administration/horaire.html.twig");
  }

}