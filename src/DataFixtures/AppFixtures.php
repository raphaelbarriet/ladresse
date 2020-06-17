<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Image;
use App\Entity\Menu;
use Faker\Factory;
use App\Entity\Plat;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use FakerRestaurant\Provider\fr_FR\Restaurant;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $categoriesName = ["entrée", "plat", "dessert", "salade"];
        $menusName = ["menu du jour", "menu", 'provisoire'];
        $faker = Factory::create();
        $faker->addProvider(new Restaurant($faker));
        $menus = [];
        $categories=[];

        $admin = new User();
        $password = $this->encoder->encodePassword($admin, "admin");
        $admin->setUsername('richard')
              ->setPassword($password);

            $manager->persist($admin);

         for($j=0; $j < 3; $j++){
             $category = (new Categories())->setName($categoriesName[$j]);
             $categories[] = $category;
             $manager->persist($category);
         }

         for($k=0; $k <2; $k++){
            $menu = (new Menu())->setName($menusName[$k]);
            $menus[] = $menu;
            $manager->persist($menu);
         }

         for($i=0; $i < 15; $i++){
             $plat = new Plat();
             $plat->setName($faker->foodName())
                  ->setDescription($faker->paragraph(6))
                  ->setIngredient("$faker->sauceName(), $faker->meatName(), $faker->vegetableName()")
                  ->setPrice($faker->numberBetween(5, 19))
                  ->setCategory($categories[mt_rand(0, 2)])
                  ->setMenu($menus[mt_rand(0, 1)])
             ;

             $manager->persist($plat);
         }

        $manager->flush();
    }
}
