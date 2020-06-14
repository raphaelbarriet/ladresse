<?php

namespace App\Entity;

use Cocur\Slugify\Slugify;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PlatRepository;
use Doctrine\ORM\Mapping\PreUpdate;
use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PlatRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Plat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Le nom du plat est trop court",
     *      maxMessage = "Le nom du plat est trop long il ne peut pas dépasser 50 charactère",
     *      allowEmptyString = false
     * )
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 15,
     *      max = 300,
     *      minMessage = "La description est trop court",
     *      maxMessage = "La description est trop long elle ne peut pas dépasser 200 charactère",
     *      allowEmptyString = false
     * )
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $ingredient;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="plats")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity=Menu::class, inversedBy="plats")
     * @ORM\JoinColumn(nullable=false)
     */
    private $menu;

    /** 
     * @PrePersist
     * @PreUpdate
    */
    public function generateSlug(){
        if(empty($this->slug)){
            $slugify = new Slugify();
            $this->slug = $slugify->slugify($this->name);
        }
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIngredient(): ?string
    {
        return $this->ingredient;
    }

    public function setIngredient(string $ingredient): self
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCategory(): ?Categories
    {
        return $this->category;
    }

    public function setCategory(?Categories $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getMenu(): ?Menu
    {
        return $this->menu;
    }

    public function setMenu(?Menu $menu): self
    {
        $this->menu = $menu;

        return $this;
    }
}
