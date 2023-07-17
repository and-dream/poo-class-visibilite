<?php

require_once './User.php';
require_once './Animal.php';

// un objet est une instance de classe
// un objet est une variable qui contient toutes les propriétés et les méthodes d'une classe
$user = new User();
$user->firstname = 'Lea';
$user->lastname = 'Dupont'; 
echo $user->bonjour();
echo '<br>';
echo $user->presentation(20);
echo '<br>';

$user2 = new User();
$user2->firstname = 'Lucky';
$user2->lastname = 'Luke';
echo $user2->bonjour();
echo '<br>';
echo $user2->presentation(30);
echo '<br>';

$dog = new Animal();
$dog->name = 'medor';
$dog->type = 'dog';
$dog->age = 4;
echo $dog->eat();
echo '<br>';
echo $dog->sleep();
echo '<br>';
echo $dog->name;
echo '<br>';
echo $dog->age;
echo '<br>';
echo $dog->type;
echo '<br>';

$cat = new Animal();
$cat->name = 'loulou';
$cat->type = 'cat';
$cat->age = 2;
echo $cat->eat();
echo '<br>';
echo $cat->sleep();
echo '<br>';
echo $cat->name;
echo '<br>';
echo $cat->age;
echo '<br>';
echo $cat->type;
