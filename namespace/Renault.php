<?php

namespace App\namespace;

class Renault extends Vehicule
{
    /**
     *
     * @var int
     */
    private int $carburant;

    public function carburant(): string
    {
        return "diesel";
    }

    public function nbTest(): int
    {
        return parent::nbTest() + 30;
    }
  
}