<?php

namespace App\interface;
class Bird extends Animal 
{

    /**
     *
     * @var bool
     */
    private bool $migrate;

    protected function getEat()
    {
        
    }

    public function __construct(string $name, int $age, int $nbPatte, array $listAliment, bool $migrate)
    {
        parent::__construct($name, $age, $nbPatte, $listAliment);
        $this->migrate = $migrate;
    }

    public function description()
    {
        if($this->migrate === true)
        {
            return "Je suis un oiseau migrateur";
        } else {
            return "Je ne suis pas un oiseau migrateur";
        }
    }

    /**
     *
     * @return  bool
     */ 
    public function getMigrate()
    {
        return $this->migrate;
    }

    /**
     *
     * @param  bool  $migrate
     *
     * @return  self
     */ 
    public function setMigrate(bool $migrate): self
    {
        $this->migrate = $migrate;

        return $this;
    }
}