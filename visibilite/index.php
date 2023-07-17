<?php

require_once './Car.php';

// creer une class car
// model
// color
// date

// method display
//  "ce vehicule est une XXX de couleur XXX sortie en XXX"

$car = new Car();
$car->setModel('mini');
$car->setColor('jaune')->getColor();
$car->setDate('1930');


echo $car->getModel();

echo $car->getDate();
echo $car->display();