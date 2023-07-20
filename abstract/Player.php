<?php

// une classe abstraite est une classe qui ne peut pas être instanciée
// une classe abstraite peut contenir des méthodes abstraites
// elle sert de modèle à d'autres classes qui en hériteront

// une méthode abstraite est une méthode qui n'a pas de contenu
// lorsqu'une classe hérite d'une classe abstraite, elle doit obligatoirement redéfinir les méthodes abstraites de la classe mère
abstract class Player {
    /**
     *
     * @var string
     */
    protected string $name;

    /**
     *
     * @var int
     */
    /**
     *
     * @var int
     */
    protected int $life = 100;


    /**
     *
     * @var int
     */
    protected int $score = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public abstract function hit();

    /**
     *
     * @return  string
     */ 
    public function getName(): string
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
     * Get the value of life
     *
     * @return  int
     */ 
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @param  int  $life
     *
     * @return  self
     */ 
    public function setLife(int $life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get the value of score
     *
     * @return  int
     */ 
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set the value of score
     *
     * @param  int  $score
     *
     * @return  self
     */ 
    public function setScore(int $score)
    {
        $this->score = $score;

        return $this;
    }
}