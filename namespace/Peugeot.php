<?php

namespace App\namespace;

class Peugeot extends Vehicule implements Engine
{
/**
 *
 * @var int
 */
private int $carburant;

public function carburant(): string
{
    return "essence";
}

public function nbTest(): int
{
    return parent::nbTest() + 70;
}

public function start(User $pseudo)
{
    return $pseudo->getPseudo() . ' a démarré la Peugeot';
}
}