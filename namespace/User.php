<?php

namespace App\namespace;

final class user
{
    /**
     *
     * @var string
     */
    private string $pseudo;

    public function __construct(string $pseudo)
    {
       $this->pseudo = $pseudo; 
    }

    /**
     *
     * @return  string
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }


}