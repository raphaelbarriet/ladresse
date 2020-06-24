<?php

namespace App\Controller\User;

use App\Repository\PlatRepository;
use App\Repository\StaffRepository;
use App\Service\MenuFilter;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController {

    /**
     * @Route("/", name="home.index")
     */
    public function index(MenuFilter $menuFilter, PlatRepository $platRepository, StaffRepository $staff)
    {
        
        return $this->render("navigation/index.html.twig", [
            "plats" => $platRepository->getVitrine('plat'),
            "staff" => $staff->findAll(),
        ]);
    }

}