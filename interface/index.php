<?php

require_once './Animal.php';
require_once './Dog.php';
require_once './Bird.php';
require_once './lib/Animal.php';

use \App\interface\Dog;
use \App\interface\Bird;
use \app\interface\Animal as Animal2;
use \App\interface\lib\Animal;

$loup = new Animal();
$loup2 = new Animal2();

$snoopy = new Dog ('snoopy', 5, 4, ['croquettes', "filet boeuf"], 'chien de berger');
echo $snoopy->description();

$cigogne = new Bird ('cigogne', 2, 2, ['graines', 'ver'], true);
$pie = new Bird ('pie', 3, 2, ['graines', 'ver'], false);


echo '<br>';
echo $pie->getMigrate();
// var_dump($pie);
echo '<br>';
echo $cigogne->description();
echo '<br>';
echo $pie->description();

echo '<br>';
echo $snoopy->devore();
echo '<br>';
echo $snoopy->eatSomeOne($pie);


