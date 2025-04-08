<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\SignalementRepository;

#[ORM\Entity(repositoryClass: SignalementRepository::class)]
#[ORM\Table(name: 'signalement')]
class Signalement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_signalement = null;

    public function getId_signalement(): ?int
    {
        return $this->id_signalement;
    }

    public function setId_signalement(int $id_signalement): self
    {
        $this->id_signalement = $id_signalement;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $type_signalement = null;

    public function getType_signalement(): ?string
    {
        return $this->type_signalement;
    }

    public function setType_signalement(string $type_signalement): self
    {
        $this->type_signalement = $type_signalement;
        return $this;
    }

    #[ORM\Column(type: 'text', nullable: false)]
    private ?string $description = null;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $date_signalement = null;

    public function getDate_signalement(): ?\DateTimeInterface
    {
        return $this->date_signalement;
    }

    public function setDate_signalement(?\DateTimeInterface $date_signalement): self
    {
        $this->date_signalement = $date_signalement;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $statut = null;

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    #[ORM\Column(type: 'blob', nullable: true)]
    private ?string $image = null;

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getIdSignalement(): ?int
    {
        return $this->id_signalement;
    }

    public function getTypeSignalement(): ?string
    {
        return $this->type_signalement;
    }

    public function setTypeSignalement(string $type_signalement): static
    {
        $this->type_signalement = $type_signalement;

        return $this;
    }

    public function getDateSignalement(): ?\DateTimeInterface
    {
        return $this->date_signalement;
    }

    public function setDateSignalement(?\DateTimeInterface $date_signalement): static
    {
        $this->date_signalement = $date_signalement;

        return $this;
    }

}
