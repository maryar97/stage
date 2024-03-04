<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Commande;
use App\Entity\Users;

#[ORM\Entity(repositoryClass: AdresseRepository::class)]
class Adresse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Adrnom = null;

    #[ORM\Column(length: 255)]
    private ?string $Adrprenom = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse = null;

    #[ORM\Column(length: 10)]
    private ?string $Adrcp = null;

    #[ORM\Column(length: 255)]
    private ?string $Adrville = null;

    #[ORM\Column(length: 255)]
    private ?string $Adrpays = null;

    #[ORM\Column(length: 20)]
    private ?string $Adrtel = null;

    #[ORM\Column(length: 255)]
    private ?string $Adremail = null;

    #[ORM\OneToMany(targetEntity: Commande::class, mappedBy: "adresse")]
    private Collection $commandes;

    #[ORM\ManyToOne(targetEntity: Users::class, inversedBy: "adresses")]
private ?Users $users = null;

// Dans la classe App\Entity\Adresse

public function __toString(): string
{
    return $this->getAdrPrenom() . ' ' . $this->getAdrNom() . ', ' . $this->getAdresse() . ', ' . $this->getAdrCp() . ' ' . $this->getAdrVille();
}

    

    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdrnom(): ?string
    {
        return $this->Adrnom;
    }

    public function setAdrnom(string $Adrnom): static
    {
        $this->Adrnom = $Adrnom;

        return $this;
    }

    public function getAdrprenom(): ?string
    {
        return $this->Adrprenom;
    }

    public function setAdrprenom(string $Adrprenom): static
    {
        $this->Adrprenom = $Adrprenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): static
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getAdrcp(): ?string
    {
        return $this->Adrcp;
    }

    public function setAdrcp(string $Adrcp): static
    {
        $this->Adrcp = $Adrcp;

        return $this;
    }

    public function getAdrville(): ?string
    {
        return $this->Adrville;
    }

    public function setAdrville(string $Adrville): static
    {
        $this->Adrville = $Adrville;

        return $this;
    }

    public function getAdrpays(): ?string
    {
        return $this->Adrpays;
    }

    public function setAdrpays(string $Adrpays): static
    {
        $this->Adrpays = $Adrpays;

        return $this;
    }

    public function getAdrtel(): ?string
    {
        return $this->Adrtel;
    }

    public function setAdrtel(string $Adrtel): static
    {
        $this->Adrtel = $Adrtel;

        return $this;
    }

    public function getAdremail(): ?string
    {
        return $this->Adremail;
    }

    public function setAdremail(string $Adremail): static
    {
        $this->Adremail = $Adremail;

        return $this;
    }

    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setAdresse($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getAdresse() === $this) {
                $commande->setAdresse(null);
            }
        }

        return $this;
    }

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): self
    {
        $this->users = $users;

        return $this;
    }

}
