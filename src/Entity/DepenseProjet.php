<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\EventListener\DepenseProjetListener;

use App\Repository\DepenseProjetRepository;
#[ORM\EntityListeners([DepenseProjetListener::class])]
#[ORM\Entity(repositoryClass: DepenseProjetRepository::class)]
#[ORM\Table(name: 'depense_projet')]
class DepenseProjet
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

    #[ORM\ManyToOne(targetEntity: Projet::class, inversedBy: 'depenseProjets')]
    #[ORM\JoinColumn(name: 'projet_id', referencedColumnName: 'id')]
    private ?Projet $projet = null;

    public function getProjet(): ?Projet
    {
        return $this->projet;
    }

    public function setProjet(?Projet $projet): self
    {
        $this->projet = $projet;
        return $this;
    }

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private ?string $montant = null; // Changez le type de float à string
    
    public function getMontant(): ?string
    {
        return $this->montant;
    }
    
    public function setMontant(?string $montant): self
    {
        $this->montant = $montant;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
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

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $date_depense = null;

    public function getDate_depense(): ?\DateTimeInterface
    {
        return $this->date_depense;
    }

    public function setDate_depense(?\DateTimeInterface $date_depense): self
    {
        $this->date_depense = $date_depense;
        return $this;
    }

    public function getDateDepense(): ?\DateTimeInterface
    {
        return $this->date_depense;
    }

    public function setDateDepense(?\DateTimeInterface $date_depense): static
    {
        $this->date_depense = $date_depense;

        return $this;
    }

}
