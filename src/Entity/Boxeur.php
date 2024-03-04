<?php

namespace App\Entity;

use App\Repository\BoxeurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BoxeurRepository::class)]
class Boxeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Formedeboxe = null;

    #[ORM\Column(length: 255)]
    private ?string $palmares = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFormedeboxe(): ?string
    {
        return $this->Formedeboxe;
    }

    public function setFormedeboxe(string $Formedeboxe): static
    {
        $this->Formedeboxe = $Formedeboxe;

        return $this;
    }

    public function getPalmares(): ?string
    {
        return $this->palmares;
    }

    public function setPalmares(string $palmares): static
    {
        $this->palmares = $palmares;

        return $this;
    }
}
