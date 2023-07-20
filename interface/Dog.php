<?php

require_once './SavageAnimal.php';

class Dog extends Animal implements SavageAnimal
{

    /**
     * [Description for $pedigree]
     *
     * @var string
     */
    private string $pedigree;

    protected function getEat()
    {
        
    }


    public function __construct(string $name, int $age, int $nbPatte, array $listAliment, string $pedigree)
    {
        // $this->name = $name;
        // $this->age = $age;
        // $this->nbPatte = $nbPatte;
        // $this->listAliment = $listAliment;
        parent::__construct($name, $age, $nbPatte, $listAliment);
        $this->pedigree = $pedigree;

    }

    public function description()
    {
        return "Je m'appelle : $this->name et j'ai $this->age ans et mon pedigree est : $this->pedigree et je mange des " . implode(',', $this->listAliment);
    }

    /**
     * Get [Description for $pedigree]
     *
     * @return  string
     */ 
    public function getPedigree()
    {
        return $this->pedigree;
    }

    /**
     * Set [Description for $pedigree]
     *
     * @param  string  $pedigree  [Description for $pedigree]
     *
     * @return  self
     */ 
    public function setPedigree(string $pedigree)
    {
        $this->pedigree = $pedigree;

        return $this;
    }

    public function devore()
    {
        return "je viens de dévorer un animal";
    }

    public function eatSomeOne(Bird $bird)
    {
        return "je viens de dévorer une " ;
    }


}