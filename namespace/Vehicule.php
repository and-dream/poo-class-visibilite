<?php 

namespace App\namespace;

use Random\Engine;

 abstract class Vehicule implements Engine
 {
    /**
     *
     * @var int
     */
    protected int $nbTest =100;

   /**
    *
    * @return string
    * 
    */
    // le mot clé 'final' empêche la redéfinition de la méthode
   final public function demarrer(): string
   {
        return "Je suis démarrée !";
   }

   public abstract function carburant();

   /**
    *
    * @return int
    * 
    */
   public function nbTest(): int
   {
    return $this->nbTest;
   }

}