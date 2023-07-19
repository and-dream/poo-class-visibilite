<?php

class Mage extends Player {
    /**
     *
     * @var int
     */
    private int $mana;

    public function __construct($mana)
    {
        $this->mana = $mana;
    }


    /**
     *
     * @return  int
     */ 
    public function getMana(): int
    {
        return $this->mana;
    }

    /**
     *
     * @param  int  $mana
     *
     * @return  self
     */ 
    public function setMana(int $mana):self
    {
        $this->mana = $mana;

        return $this;
    }
    
    
    

}