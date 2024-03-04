<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Adresse;
use App\Entity\Panier;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $isPaid = null;

    #[ORM\Column(length: 255)]
    private ?string $methode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $stripeSessionId = null;


    #[ORM\Column(length: 255)]
    private ?string $reference = null;

    #[ORM\Column(nullable: true)]
private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?int $ComFactId = null;
    
    #[ORM\ManyToOne(targetEntity: Adresse::class, inversedBy: "commandes")]
    #[ORM\JoinColumn(name: "adresse_id", referencedColumnName: "id", nullable: false)]
    private ?Adresse $adresse = null;

   
  
    #[ORM\ManyToOne(inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $users = null;

    #[ORM\OneToMany(targetEntity: RecapDetails::class, mappedBy: 'commande', orphanRemoval: true)]
    private Collection $recapDetails;

    #[ORM\OneToMany(mappedBy: 'paniercom', targetEntity: Panier::class)]
    #[ORM\JoinColumn(nullable: false)]
    private Collection $panier;

    #[ORM\Column]
    private ?int $total = null;

    





    public function __construct()
    {
        $this->recapDetails = new ArrayCollection();
        $this->panier = new ArrayCollection();
    }

   

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    public function setIsPaid(bool $isPaid): static
    {
        $this->isPaid = $isPaid;

        return $this;
    }

    public function getMethode(): ?string
    {
        return $this->methode;
    }

    public function setMethode(string $methode): static
    {
        $this->methode = $methode;

        return $this;
    }

    public function getStripeSessionId(): ?string
    {
        return $this->stripeSessionId;
    }

    public function setStripeSessionId(string $stripeSessionId): static
    {
        $this->stripeSessionId = $stripeSessionId;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getComFactId(): ?int
    {
        return $this->ComFactId;
    }

    public function setComFactId(?int $ComFactId): static
    {
        $this->ComFactId = $ComFactId;

        return $this;
    }

    public function getAdresse(): ?Adresse
    {
        return $this->adresse;
    }

    public function setAdresse(?Adresse $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    


 

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): static
    {
        $this->users = $users;

        return $this;
    }

    /**
     * @return Collection<int, RecapDetails>
     */
    public function getRecapDetails(): Collection
    {
        return $this->recapDetails;
    }

    public function addRecapDetail(RecapDetails $recapDetail): static
    {
        if (!$this->recapDetails->contains($recapDetail)) {
            $this->recapDetails->add($recapDetail);
            $recapDetail->setCommande($this);
        }

        return $this;
    }

    public function removeRecapDetail(RecapDetails $recapDetail): static
    {
        if ($this->recapDetails->removeElement($recapDetail)) {
            // set the owning side to null (unless already changed)
            if ($recapDetail->getCommande() === $this) {
                $recapDetail->setCommande(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Panier>
     */
    public function getPanier(): Collection
    {
        return $this->panier;
    }

    public function addPanier(Panier $panier): static
    {
        if (!$this->panier->contains($panier)) {
            $this->panier->add($panier);
            $panier->setPaniercom($this);
        }

        return $this;
    }

    public function removePanier(Panier $panier): static
    {
        if ($this->panier->removeElement($panier)) {
            // set the owning side to null (unless already changed)
            if ($panier->getPaniercom() === $this) {
                $panier->setPaniercom(null);
            }
        }

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): static
    {
        $this->total = $total;

        return $this;
    }

    
}