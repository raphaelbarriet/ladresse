<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminController extends AbstractController {


    /** 
     * @Route("/admin/login", name="admin.login")
    */
    public function login(AuthenticationUtils $utils)
    {
        return $this->render("admin/login.html.twig", [
            "error" => $utils->getLastAuthenticationError(),
            "lastUsername" => $utils->getLastUsername()
        ]);
    }

    /** 
     * @Route("/connected/logout", name="admin.logout")
    */
    public function logout(){

    }

}