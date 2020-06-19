<?php

namespace App\Entity;

use App\Repository\DaysRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DaysRepository::class)
 */
class Days
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dayName;

    /**
     * @ORM\OneToOne(targetEntity=OpeningTime::class, inversedBy="day", cascade={"persist", "remove"})
     */
    private $openHours;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDayName(): ?string
    {
        return $this->dayName;
    }

    public function setDayName(string $dayName): self
    {
        $this->dayName = $dayName;

        return $this;
    }

    public function getOpenHours(): ?OpeningTime
    {
        return $this->openHours;
    }

    public function setOpenHours(?OpeningTime $openHours): self
    {
        $this->openHours = $openHours;

        return $this;
    }
}
