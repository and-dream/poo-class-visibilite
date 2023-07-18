<?php

class Article
{
    /**
     *
     * @var string
     */
    private string $name;

    /**
     *
     * @var int
     */
    private float $price;

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

    public function getName(string $name): string
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
}