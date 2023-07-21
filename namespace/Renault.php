<?php
namespace App\namespace;
require_once './Engine.php';

class Renault extends Vehicule implements Engine
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

    public function start(User $x)
    {
        return $x->getPseudo() . " a démarré la Peugeot";
    }
  
}