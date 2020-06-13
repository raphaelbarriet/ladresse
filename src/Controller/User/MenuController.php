<?php 

namespace App\Controller\User;

use App\Service\MenuFilter;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MenuController extends AbstractController {

  /**
  * @Route("/menu", name="menu.index")
  */
  public function menu(MenuFilter $menuFilter){

      return $this->render('navigation/menu_show.html.twig', [
           "menu" => $menuFilter,
      ]);
  }


}