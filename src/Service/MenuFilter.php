<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class MenuFilter {

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    
    /**
     *
     * Get every plat by menus and categories
     * 
     * @param string $menu
     * @param string $category
     * @return void
     */
    public function getMenuByCategory(string $menu, string $category){
        return  $this->em->createQuery(
            "SELECT p.name as plat, p.ingredient, p.price, c.name as category, p.slug
             FROM App\Entity\Plat p
             JOIN p.category c
             JOIN p.menu m
             WHERE m.name = '$menu' AND c.name = '$category' ")
                ->getResult()
        ;
    }

    public function getMenu(string $menu){
        return  $this->em->createQuery(
            "SELECT p.id, p.slug,p.name as plat, p.ingredient, p.price, c.name as category
             FROM App\Entity\Plat p
             JOIN p.category c
             JOIN p.menu m
             WHERE m.name = '$menu'")
                ->getResult()
        ;
    }

    public function getRandomDish(){
        return $this->em->createQuery(
            "SELECT p.name, p.description, p.slug
             FROM App\Entity\Plat p
             ")
                        ->setMaxResults(2)
                        ->setFirstResult(mt_rand(0, 10))
                        ->getResult()
        ;
    }

    public function getEntry()
    {
      return  $this->getMenuByCategory('menu', 'entrée');
    }

    public function getDayEntry(){
       return $this->getMenuByCategory('menu du jour', 'entrée');
    }

    public function getMainDish()
    {
        return $this->getMenuByCategory('menu', 'plat');
    }

    public function getDayMainDish(){
        return $this->getMenuByCategory('menu du jour', 'plat');
    }

    public function getDessert()
    {
        return $this->getMenuByCategory('menu', 'dessert');
    }

    public function getDayDessert(){
        return $this->getMenuByCategory('menu du jour', 'dessert');
    }
    
}