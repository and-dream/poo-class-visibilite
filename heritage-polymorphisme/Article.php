<?php

class Article
{
    /**
     *
     * @var string
     */
    protected string $name;

    /**
     *
     * @var int
     */
    protected float $price;

    public function __construct(string $name, float $price)
    {
      $this->name = $name;
      $this->price =$price;  
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setPrice(float $price): self
    {
        $this->$price = $price;
        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function displayProduct()
    {
        return "le produit est un : $this->name et il coûte $this->price euros";
    }
}