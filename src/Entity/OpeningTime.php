<?php

namespace App\Entity;

use App\Repository\OpeningTimeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OpeningTimeRepository::class)
 */
class OpeningTime
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $open;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $closed;

    /**
     * @ORM\OneToOne(targetEntity=Days::class, mappedBy="openHours", cascade={"persist", "remove"})
     */
    private $day;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOpen(): ?string
    {
        return $this->open;
    }

    public function setOpen(int $open): self
    {
        $this->open = $open;

        return $this;
    }

    public function getClosed(): ?string
    {
        return $this->closed;
    }

    public function setClosed(int $closed): self
    {
        $this->closed = $closed;

        return $this;
    }

    public function getDay(): ?Days
    {
        return $this->day;
    }

    public function setDay(?Days $day): self
    {
        $this->day = $day;

        // set (or unset) the owning side of the relation if necessary
        $newOpenHours = null === $day ? null : $this;
        if ($day->getOpenHours() !== $newOpenHours) {
            $day->setOpenHours($newOpenHours);
        }

        return $this;
    }
}
