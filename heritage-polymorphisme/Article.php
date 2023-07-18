<?php

class Article
{
    /**
     *
     * @var string
     */
    private string $nom;

    /**
     *
     * @var int
     */
    private float $prix;

    public function __construct(string $nom, float $prix)
    {
      $this->nom = $nom;
      $this->prix =$prix;  
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getNom(string $nom): string
    {
        return $this->nom;
    }

    public function setPrix(float $prix): self
    {
        $this->$prix = $prix;
        return $this;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }
}