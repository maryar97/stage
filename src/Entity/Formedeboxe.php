<?php

namespace App\Entity;

use App\Entity\Panier;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\FormedeboxeRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: FormedeboxeRepository::class)]
class Formedeboxe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $prix = null;

    #[ORM\ManyToMany(targetEntity: Panier::class, mappedBy: "formesDeBoxe")]
    private $paniers;

    #[ORM\ManyToOne(targetEntity: Panier::class, inversedBy: "formesDeBoxe")]
    #[ORM\JoinColumn(name: "panier_id", referencedColumnName: "id")]
    private ?Panier $panier = null;

   
    #[ORM\OneToMany(mappedBy: 'formedeboxe', targetEntity: RecapDetails::class)]
    private Collection $recap_fdb;

    #[ORM\Column]
    private ?int $quantite = null;



    public function __construct()
    {
        $this->paniers = new ArrayCollection();
        $this->recap_fdb = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }
 /**
     * @return Collection|Panier[]
     */
    public function getPaniers(): Collection
    {
        return $this->paniers;
    }

    public function getPanier(): ?Panier
    {
        return $this->panier;
    }

    public function setPanier(?Panier $panier): self
    {
        $this->panier = $panier;

        return $this;
    }

    /**
     * @return Collection<int, RecapDetails>
     */
    public function getRecapDetails(): Collection
    {
        return $this->recap_fdb;
    }

    public function addRecapDetail(RecapDetails $recapFdb): static
    {
        if (!$this->recap_fdb->contains($recapFdb)) {
            $this->recap_fdb->add($recapFdb);
            $recapFdb->setFormedeboxe($this);
        }

        return $this;
    }

    public function removeRecapDetail(RecapDetails $recapFdb): static
    {
        if ($this->recap_fdb->removeElement($recapFdb)) {
            // set the owning side to null (unless already changed)
            if ($recapFdb->getFormedeboxe() === $this) {
                $recapFdb->setFormedeboxe(null);
            }
        }

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    

   
}
