<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\ZoneDeCollecteRepository;

#[ORM\Entity(repositoryClass: ZoneDeCollecteRepository::class)]
#[ORM\Table(name: 'zone_de_collecte')]
class ZoneDeCollecte
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

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $population = null;

    public function getPopulation(): ?int
    {
        return $this->population;
    }

    public function setPopulation(?int $population): self
    {
        $this->population = $population;
        return $this;
    }

    #[ORM\Column(type: 'time', nullable: false)]
    private ?string $temps_de_collecte = null;

    public function getTemps_de_collecte(): ?string
    {
        return $this->temps_de_collecte;
    }

    public function setTemps_de_collecte(string $temps_de_collecte): self
    {
        $this->temps_de_collecte = $temps_de_collecte;
        return $this;
    }

    public function getTempsDeCollecte(): ?\DateTimeInterface
    {
        return $this->temps_de_collecte;
    }

    public function setTempsDeCollecte(\DateTimeInterface $temps_de_collecte): static
    {
        $this->temps_de_collecte = $temps_de_collecte;

        return $this;
    }

}
