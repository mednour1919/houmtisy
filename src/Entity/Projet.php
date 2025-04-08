<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\ProjetRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProjetRepository::class)]
#[ORM\Table(name: 'projet')]
class Projet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 100, nullable: false)]
    #[Assert\NotBlank(message: "Le nom du projet est obligatoire")]
    #[Assert\Length(
        min: 3,
        max: 100,
        minMessage: "Le nom doit faire au moins {{ limit }} caractères",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $nom = null;

    #[ORM\Column(type: 'string', length: 20, nullable: false)]
    #[Assert\NotBlank(message: "Le statut est obligatoire")]
    #[Assert\Choice(
        choices: ['proposé', 'planifié', 'en cours', 'suspendu', 'terminé'],
        message: "Choisissez un statut valide"
    )]
    private ?string $statut = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, nullable: false)]
    #[Assert\NotBlank(message: "Le budget est obligatoire")]
    #[Assert\Type(type: 'numeric', message: 'Le budget doit être un nombre')]
    #[Assert\Positive(message: "Le budget doit être positif")]
    private ?float $budget = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, nullable: false)]
    #[Assert\Type(type: 'numeric', message: 'La dépense doit être un nombre')]
    #[Assert\PositiveOrZero(message: "La dépense ne peut pas être négative")]
    private ?float $depense = null;

    #[ORM\Column(type: 'date', nullable: false, name: "dateDebut")]
    #[Assert\NotBlank(message: "La date de début est obligatoire")]
    #[Assert\LessThan(
        propertyPath: "dateFin",
        message: "La date de début doit être antérieure à la date de fin"
    )]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: 'date', nullable: false, name: "dateFin")]
    #[Assert\NotBlank(message: "La date de fin est obligatoire")]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(type: 'string', length: 500, nullable: true)]
    #[Assert\Length(
        max: 500,
        maxMessage: "La description ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: Fournisseur::class, inversedBy: 'projets')]
    #[ORM\JoinColumn(name: 'fournisseur_id', referencedColumnName: 'id', nullable: true)]
    private ?Fournisseur $fournisseur = null;

    #[ORM\OneToMany(targetEntity: Contribution::class, mappedBy: 'projet')]
    private Collection $contributions;

    #[ORM\OneToMany(targetEntity: DepenseProjet::class, mappedBy: 'projet')]
    private Collection $depenseProjets;

    public function __construct()
    {
        $this->contributions = new ArrayCollection();
        $this->depenseProjets = new ArrayCollection();
        $this->depense = 0.0; // Initialiser les dépenses à 0
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getBudget(): ?float
    {
        return $this->budget;
    }

    public function setBudget(float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    public function getDepense(): ?float
    {
        return $this->depense;
    }

    public function setDepense(float $depense): self
    {
        $this->depense = $depense;
        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;
        return $this;
    }

    public function getContributions(): Collection
    {
        return $this->contributions;
    }

    public function addContribution(Contribution $contribution): self
    {
        if (!$this->contributions->contains($contribution)) {
            $this->contributions->add($contribution);
        }
        return $this;
    }

    public function removeContribution(Contribution $contribution): self
    {
        $this->contributions->removeElement($contribution);
        return $this;
    }

    public function getDepenseProjets(): Collection
    {
        return $this->depenseProjets;
    }

    public function addDepenseProjet(DepenseProjet $depenseProjet): self
    {
        if (!$this->depenseProjets->contains($depenseProjet)) {
            $this->depenseProjets->add($depenseProjet);
            $depenseProjet->setProjet($this);
            
            // Mettre à jour le total des dépenses
            $this->depense += $depenseProjet->getMontant();
        }
        return $this;
    }
    
    public function removeDepenseProjet(DepenseProjet $depenseProjet): self
    {
        if ($this->depenseProjets->removeElement($depenseProjet)) {
            // Si la dépense était bien associée à ce projet
            if ($depenseProjet->getProjet() === $this) {
                $depenseProjet->setProjet(null);
                
                // Mettre à jour le total des dépenses
                $this->depense -= $depenseProjet->getMontant();
            }
        }
        return $this;
    }
}
