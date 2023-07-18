<?php

require_once './Car.php';
require_once './Book.php';

// creer une class car
// model
// color
// date

// method display
//  "ce vehicule est une XXX de couleur XXX sortie en XXX"

$car = new Car('bmw', 'noir', '2003');
$peugeot = new Car ('peugeot', 'bleue', '2010');

echo $car->display();
echo '<br>';
echo $peugeot->display();

// creer une classe Book
    // title string
    // author string
    // pages int
    // year int

    // constructeur
    // setter
    // getter

    // read()
    // "Je lis le livre XXX écrit par XXX";

$alice = new Book('Alice au pays des merveilles', 'Lewis Carroll', 124, 1865);
$harry = new Book("Harry Potter à l'école des sorciers", 'J.K. Rowling', 320, 1997);

echo '<br>';
echo $alice->read();
echo '<br>';
echo $harry->read();
