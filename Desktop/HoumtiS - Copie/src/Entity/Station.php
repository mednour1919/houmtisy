<?php

namespace App\Entity;

use App\Repository\StationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: StationRepository::class)]
class Station
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_station = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom de la station ne peut pas être vide")]
    #[Assert\Length(
        min: 3,
        max: 50,
        minMessage: "Le nom de la station doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le nom de la station ne peut pas dépasser {{ limit }} caractères"
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s-]+$/",
        message: "Le nom de la station ne doit contenir que des lettres, espaces et tirets"
    )]
    private ?string $nomStation = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "La capacité ne peut pas être vide")]
    #[Assert\Positive(message: "La capacité doit être un nombre positif")]
    #[Assert\LessThan(value: 1000, message: "La capacité ne peut pas dépasser 1000 places")]
    private ?int $capacite = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La zone ne peut pas être vide")]
    #[Assert\Choice(
        choices: ["Nord", "Sud", "Est", "Ouest", "Centre"],
        message: "La zone doit être l'une des suivantes : Nord, Sud, Est, Ouest, Centre"
    )]
    private ?string $zone = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le statut ne peut pas être vide")]
    #[Assert\Choice(
        choices: ["Actif", "Inactif", "En maintenance"],
        message: "Le statut doit être l'un des suivants : Actif, Inactif, En maintenance"
    )]
    private ?string $status = null;

    // Getters and setters
    
    public function getId_station(): ?int
    {
        return $this->id_station;
    }

    public function getNomStation(): ?string
    {
        return $this->nomStation;
    }

    public function setNomStation(string $nomStation): static
    {
        $this->nomStation = $nomStation;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(string $zone): static
    {
        $this->zone = $zone;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }
}