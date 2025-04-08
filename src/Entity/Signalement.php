<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\SignalementRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: SignalementRepository::class)]
#[ORM\Table(name: 'signalement')]
class Signalement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_signalement', type: 'integer')]
    private ?int $id_signalement = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $type_signalement = null;

    #[ORM\Column(type: 'text')]
    private ?string $description = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $date_signalement = null;

    #[ORM\Column(type: 'blob', nullable: true)]
    private $image;

    #[ORM\Column(type: 'string', length: 50)]
    private ?string $statut = 'nouveau';

    #[ORM\OneToMany(targetEntity: Reponse::class, mappedBy: 'signalement', cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $reponses;

    public function __construct()
    {
        $this->date_signalement = new \DateTime();
        $this->reponses = new ArrayCollection();
    }

    public function getIdSignalement(): ?int
    {
        return $this->id_signalement;
    }

    public function getId_signalement(): ?int
    {
        return $this->id_signalement;
    }

    public function setId_signalement(int $id_signalement): static
    {
        $this->id_signalement = $id_signalement;
        return $this;
    }

    public function getTypeSignalement(): ?string
    {
        return $this->type_signalement;
    }

    public function getType_signalement(): ?string
    {
        return $this->type_signalement;
    }

    public function setTypeSignalement(string $type_signalement): static
    {
        $this->type_signalement = $type_signalement;
        return $this;
    }

    public function setType_signalement(string $type_signalement): static
    {
        $this->type_signalement = $type_signalement;
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

    public function getDateSignalement(): ?\DateTimeInterface
    {
        return $this->date_signalement;
    }

    public function getDate_signalement(): ?\DateTimeInterface
    {
        return $this->date_signalement;
    }

    public function setDateSignalement(\DateTimeInterface $date_signalement): static
    {
        $this->date_signalement = $date_signalement;
        return $this;
    }

    public function setDate_signalement(\DateTimeInterface $date_signalement): static
    {
        $this->date_signalement = $date_signalement;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): static
    {
        $this->image = $image;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    /**
     * @return Collection<int, Reponse>
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponse $reponse): static
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses->add($reponse);
            $reponse->setSignalement($this);
        }
        return $this;
    }

    public function removeReponse(Reponse $reponse): static
    {
        if ($this->reponses->removeElement($reponse)) {
            if ($reponse->getSignalement() === $this) {
                $reponse->setSignalement(null);
            }
        }
        return $this;
    }

    public function __toString(): string
    {
        return sprintf('Signalement #%d - %s', $this->id_signalement, $this->type_signalement);
    }
}