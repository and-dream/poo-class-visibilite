<?php

// VISIBILITE (public, private,protected)
// - public : accessible depuis l'exterieur et l'interieur de la classe
//  - private : accessible uniquement depuis l'interieur de la classe
//  - protected : accessible depuis l'interieur de la classe et depuis les classes enfants

//  Un getter (accesseur) est une methode qui permet de récupérer la valeur d'une propriété privée
//  Un setter (mutateur) est une methode qui permet de modifier la valeur d'une propriété privée

class Car
{
    /**
     *
     * @var string
     */
    private string $model;


    /**
     *
     * @var string
     */
    private string $color;

    /**
     *
     * @var string
     */
    private string $date;

    public function __construct(string $model, string $color, string $date)
    {
        $this->model =$model;
        $this->color = $color;
        $this->date = $date;   
    }

    /**
     *
     * @return [type]
     * 
     */
    public function display(): string
    {
        return "Ce véhicule est une $this->model de couleur $this->color sortie en $this->date";
    }

    public function setModel( string $model): void
    {
      $this->model = $model;  
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setColor( string $color): self
    {
        $this->color = $color;
        return $this;  
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setDate($date):void
    {
        $this->date = $date;
    }

    public function getDate(): string
    {
        return $this->date;
    }

}