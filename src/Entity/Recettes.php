<?php

namespace App\Entity;

use App\Repository\RecettesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecettesRepository::class)]
class Recettes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 800)]
    private ?string $titre = null;

    #[ORM\Column(length: 500)]
    private ?string $auteur_ice = null;

    #[ORM\Column(length: 255)]
    private ?string $groupe = null;

    #[ORM\Column(length: 255)]
    private ?string $produit = null;

    #[ORM\Column]
    private array $produits_utilises = [];

    #[ORM\Column]
    private array $producteur = [];

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column(length: 3000)]
    private ?string $descriptif = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAuteurIce(): ?string
    {
        return $this->auteur_ice;
    }

    public function setAuteurIce(string $auteur_ice): static
    {
        $this->auteur_ice = $auteur_ice;

        return $this;
    }

    public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(string $groupe): static
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): static
    {
        $this->produit = $produit;

        return $this;
    }

    public function getProduitsUtilises(): array
    {
        return $this->produits_utilises;
    }

    public function setProduitsUtilises(array $produits_utilises): static
    {
        $this->produits_utilises = $produits_utilises;

        return $this;
    }

    public function getProducteur(): array
    {
        return $this->producteur;
    }

    public function setProducteur(array $producteur): static
    {
        $this->producteur = $producteur;

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

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): static
    {
        $this->descriptif = $descriptif;

        return $this;
    }
}
