<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $avis_contenu = null;

    #[ORM\ManyToOne(inversedBy: 'avis')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateurs $fk_avis = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAvisContenu(): ?string
    {
        return $this->avis_contenu;
    }

    public function setAvisContenu(string $avis_contenu): self
    {
        $this->avis_contenu = $avis_contenu;

        return $this;
    }

    public function getFkAvis(): ?Utilisateurs
    {
        return $this->fk_avis;
    }

    public function setFkAvis(?Utilisateurs $fk_avis): self
    {
        $this->fk_avis = $fk_avis;

        return $this;
    }
}
