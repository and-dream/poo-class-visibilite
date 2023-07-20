<?php

interface SavageAnimal 
{
    // retourne je viens de dévorer un animal
    public function devore();

    // retourne je viens de dévorer un XXX (nom de l'oiseau)
    public  function eatSomeOne(Bird $bird);
}