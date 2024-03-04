<?php

namespace App\Entity;

use App\Repository\RecapDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecapDetailsRepository::class)]
class RecapDetails
{
    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $totalRecap = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'recapDetails')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commande $commande = null;

    #[ORM\Column(length: 255)]
    private ?string $formedeboxe = null;



    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getTotalRecap(): ?string
    {
        return $this->totalRecap;
    }

    public function setTotalRecap(string $totalRecap): static
    {
        $this->totalRecap = $totalRecap;

        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): static
    {
        $this->commande = $commande;

        return $this;
    }

    public function getFormedeboxe(): ?string
    {
        return $this->formedeboxe;
    }

    public function setFormedeboxe(string $formedeboxe): static
    {
        $this->formedeboxe = $formedeboxe;

        return $this;
    }

   
}
