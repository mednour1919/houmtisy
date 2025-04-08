<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\ReponseRepository;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
#[ORM\Table(name: 'reponse')]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_reponse = null;

    public function getId_reponse(): ?int
    {
        return $this->id_reponse;
    }

    public function setId_reponse(int $id_reponse): self
    {
        $this->id_reponse = $id_reponse;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $id_signalement = null;

    public function getId_signalement(): ?int
    {
        return $this->id_signalement;
    }

    public function setId_signalement(?int $id_signalement): self
    {
        $this->id_signalement = $id_signalement;
        return $this;
    }

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $reponse = null;

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(?string $reponse): self
    {
        $this->reponse = $reponse;
        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $date_reponse = null;

    public function getDate_reponse(): ?\DateTimeInterface
    {
        return $this->date_reponse;
    }

    public function setDate_reponse(?\DateTimeInterface $date_reponse): self
    {
        $this->date_reponse = $date_reponse;
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

    public function getIdReponse(): ?int
    {
        return $this->id_reponse;
    }

    public function getIdSignalement(): ?int
    {
        return $this->id_signalement;
    }

    public function setIdSignalement(?int $id_signalement): static
    {
        $this->id_signalement = $id_signalement;

        return $this;
    }

    public function getDateReponse(): ?\DateTimeInterface
    {
        return $this->date_reponse;
    }

    public function setDateReponse(?\DateTimeInterface $date_reponse): static
    {
        $this->date_reponse = $date_reponse;

        return $this;
    }

}
