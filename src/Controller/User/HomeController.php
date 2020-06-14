<?php

namespace App\Controller\User;

use App\Repository\PlatRepository;
use App\Service\MenuFilter;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController {

    /**
     * @Route("/", name="home.index")
     */
    public function index(MenuFilter $menuFilter)
    {
        return $this->render("navigation/index.html.twig", [
            "plats" => $menuFilter->getRandomDish()
        ]);
    }

}