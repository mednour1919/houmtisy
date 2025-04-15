<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\ProjetRepository;

#[ORM\Entity(repositoryClass: ProjetRepository::class)]
#[ORM\Table(name: 'projet')]
class Projet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Fournisseur::class, inversedBy: 'projets')]
    #[ORM\JoinColumn(name: 'fournisseur_id', referencedColumnName: 'id')]
    private ?Fournisseur $fournisseur = null;

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $nom = null;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $statut = null;

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $budget = null;

    public function getBudget(): ?float
    {
        return $this->budget;
    }

    public function setBudget(float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: true)]
    private ?float $depense = null;

    public function getDepense(): ?float
    {
        return $this->depense;
    }

    public function setDepense(?float $depense): self
    {
        $this->depense = $depense;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $dateDebut = null;

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $dateFin = null;

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Contribution::class, mappedBy: 'projet')]
    private Collection $contributions;

    /**
     * @return Collection<int, Contribution>
     */
    public function getContributions(): Collection
    {
        if (!$this->contributions instanceof Collection) {
            $this->contributions = new ArrayCollection();
        }
        return $this->contributions;
    }

    public function addContribution(Contribution $contribution): self
    {
        if (!$this->getContributions()->contains($contribution)) {
            $this->getContributions()->add($contribution);
        }
        return $this;
    }

    public function removeContribution(Contribution $contribution): self
    {
        $this->getContributions()->removeElement($contribution);
        return $this;
    }

    #[ORM\OneToMany(targetEntity: DepenseProjet::class, mappedBy: 'projet')]
    private Collection $depenseProjets;

    /**
     * @return Collection<int, DepenseProjet>
     */
    public function getDepenseProjets(): Collection
    {
        if (!$this->depenseProjets instanceof Collection) {
            $this->depenseProjets = new ArrayCollection();
        }
        return $this->depenseProjets;
    }

    public function addDepenseProjet(DepenseProjet $depenseProjet): self
    {
        if (!$this->getDepenseProjets()->contains($depenseProjet)) {
            $this->getDepenseProjets()->add($depenseProjet);
        }
        return $this;
    }

    public function removeDepenseProjet(DepenseProjet $depenseProjet): self
    {
        $this->getDepenseProjets()->removeElement($depenseProjet);
        return $this;
    }

}
