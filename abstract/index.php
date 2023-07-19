<?php
require_once './Player.php';
require_once './Mage.php';
require_once './Warrior.php';

// creer une class Player
    //name
    // life par défaut à 100
    // score par défaut à 0

// constructor
    // initialise le name

// getter et setter
// method hit() elle enlève 10 points à life

// creer une class Warrior qui herite de player
    // arrow
    // constructor
    // getter et setter
  // method hit() elle enlève 15 points à life


// creer une class Mage qui herite de Player
    // mana
    // constructor
    // getter et setter
    // method hit() elle enlève 30 points à life

 
// $player = new Player('Conan');
// echo $player->getName();
// echo $player->getLife();
// $player->hit();



$guerrier = new Warrior('Ken', 5);
echo $guerrier->getName();
echo $guerrier->getScore();
echo $guerrier->getArrow();