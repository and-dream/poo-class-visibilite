<?php

// une classe est un modèle qui permet de créer des objets
// une classe est  un plan de construction d'objets
// une classe est composée de propriétés et de méthodes
// une classe est un modèle de données
// les données sont structurées sous la forme d'une classe

class User 
{
    // une propriété est une variable définie dans une classe
    // une méthode est une fonction définie dans une classe


    /**
     *
     * @var string
     */
    public string $lastname;     // une propriété
    
    /**
     *
     * @var string
     */
    public string $firstname;
    
    /**
     *
     * @var string
     */
    public string $email;
    
    /**
     *
     * @var string
     */
    public string $password; 
    
    /**
     *
     * @var array
     */
    public array $notes;
    
    /**
     *
     * @var int
     */
    public int $age = 0;
    
    /**
     *
     * @return string
     */
    public function hello(): string   // une méthode
    {
        return 'Salut tout le monde';
    }

    /**
     * Cette fonction affiche l'identite du User
     *
     * @return string
     */
    public function bonjour(): string
    {
        return "Je m'appelle $this->firstname $this->lastname";
    }

    /**
     * @param int $age
     * 
     * @return string 
     */
    public function presentation(int $age): string
    {
        return $this->bonjour() ." et j'ai $age ans";
    }
}

