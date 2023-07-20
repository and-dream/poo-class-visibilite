<?php

abstract class Animal
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
    protected int $age;

 
    /**
     *
     * @var int
     */
    protected int $nbPatte;

    /**
     *
     * @var array
     */
    protected array $listAliment;

    protected abstract function getEat();

    public function __construct(string $name, int $age, int $nbPatte, array $listAliment)
    {
        $this->name = $name;
        $this->age = $age;
        $this->nbPatte = $nbPatte;
        $this->listAliment = $listAliment;
    }

    /**
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     *
     * @return  int
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     *
     * @param  int  $age 
     *
     * @return  self
     */ 
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     *
     * @return  int
     */ 
    public function getNbPatte()
    {
        return $this->nbPatte;
    }

    /**
     *
     * @param  int  $nbPatte  
     *
     * @return  self
     */ 
    public function setNbPatte(int $nbPatte): self
    {
        $this->nbPatte = $nbPatte;

        return $this;
    }


    /**
     *
     * @return  array
     */ 
    public function getListAliment()
    {
        return $this->listAliment;
    }

    /**
     *
     * @param  array  $listAliment 
     *
     * @return  self
     */ 
    public function setListAliment(array $listAliment)
    {
        $this->listAliment = $listAliment;

        return $this;
    }
}