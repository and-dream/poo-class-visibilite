<?php

spl_autoload_register(function($a)
{
    $a = substr($a, 14);
    var_dump($a);
    require_once $a . '.php';
});

require_once './Vehicule.php';
require_once './Renault.php';
require_once './Peugeot.php';
require_once './User.php';
require_once './Engine.php';

use App\namespace\Peugeot;
use App\namespace\Vehicule;
use App\namespace\Renault;
use App\namespace\User;
use App\namespace\Engine;

$renault = new Renault;
echo $renault->demarrer();
echo $renault->nbTest();

$peugeot = new Peugeot;
echo $peugeot->demarrer();
echo $peugeot->nbTest();

$pseudo = new User('Marc');
echo '<br>';
echo $pseudo->getPseudo();

echo '<br>';
echo $peugeot->start($pseudo);
