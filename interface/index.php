<?php

require_once './Animal.php';
require_once './Dog.php';
require_once './Bird.php';

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

