<?php

namespace App\Entity;

use App\Entity\Commande;
use App\Entity\Formedeboxe;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PanierRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: PanierRepository::class)]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $panierqte = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $prixunite = null;



    #[ORM\OneToMany(targetEntity: Commande::class, mappedBy: "panier")]
    private $commandes;

    #[ORM\ManyToOne(targetEntity: Formedeboxe::class, inversedBy: "paniers")]
    #[ORM\JoinColumn(name: "forme_de_boxe_id", referencedColumnName: "id")]
    private ?Formedeboxe $Formedeboxe = null;


    #[ORM\Column(length: 255)]
    private ?string $totalRecap = null;

    #[ORM\ManyToOne(inversedBy: 'panier')]
    private ?Commande $paniercom = null;

    

    

    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPanierqte(): ?int
    {
        return $this->panierqte;
    }

    public function setPanierqte(int $panierqte): static
    {
        $this->panierqte = $panierqte;

        return $this;
    }

    public function getPrixunite(): ?string
    {
        return $this->prixunite;
    }

    public function setPrixunite(string $prixunite): static
    {
        $this->prixunite = $prixunite;

        return $this;
    }

    

    /**
     * @return Collection|Commande[]
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

   


    public function getFormedeboxe(): ?Formedeboxe
    {
        return $this->Formedeboxe;
    }

    public function setFormedeboxe(?Formedeboxe $Formedeboxe): self
    {
        $this->Formedeboxe = $Formedeboxe;

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

    public function getPaniercom(): ?Commande
    {
        return $this->paniercom;
    }

    public function setPaniercom(?Commande $paniercom): static
    {
        $this->paniercom = $paniercom;

        return $this;
    }

    
}
