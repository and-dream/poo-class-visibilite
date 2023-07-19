<?php

require_once './Article.php';

//  L'héritage permet de créer une classe enfant qui hérite des propriétés et méthodes de la classe parent
//  L'héritage permet de créer une classe enfant qui pourra avoir ses propres propriétés et méthodes supplémentaires
// Il faut que les propriétés et méthodes du parent soient en public ou protected pour que l'enfant puisse y accéder 


// Le polymorphisme permet de redéfénir une méthode dans la classe enfant
class Aliment extends Article
{
    /**
     *
     * @var string
     */
    protected string $datePeremption;

    // constructeur initialise toutes les propriétés
    public function __construct(string $name, float $price, string $date)
    {
        $this->name = $name;
        $this->price = $price;
        $this->datePeremption = $date;
    }

    public function setDate($datePeremption): self
    {
        $this->datePeremption = $datePeremption;
        return $this;
    }

    public function getDate($datePeremption): string
    {
        return $this->datePeremption;
    }

    public function displayPrice()
    {
        return "le prix est de : $this->price";
    }

    public function displayProduct()
    {
        // pour accéder à la méthode parent lorsqu'on a redéfiniune méthode par polymorphisme il faut utiliser parent::
        return  parent::displayProduct() ." et la date de peremption est le : $this->datePeremption";
    }

}