<?php

namespace App\Entity;

use App\Repository\StaffRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=StaffRepository::class)
 */
class Staff
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
     * * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Votre nom ne peut pas être inferieur a 2 charactéres!",
     *      maxMessage = "Votre nom ne peut pas être superieur a 50 charactéres!",
     *      allowEmptyString = false
     * )
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $Statu;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 10,
     *      max = 1000,
     *      minMessage = "Votre description ne peut pas être inferieur a 10 charactéres!",
     *      maxMessage = "Votre description ne peut pas être superieur a 1000 charactéres!",
     *      allowEmptyString = false
     * )
     */
    private $description;

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

    public function getStatu(): ?string
    {
        return $this->Statu;
    }

    public function setStatu(string $Statu): self
    {
        $this->Statu = $Statu;

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
}
