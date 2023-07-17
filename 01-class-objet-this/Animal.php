<?php

/**
 * *@author Gloria D <gloriadamase@gmail.com>
 */

class Animal
{
    /**
     *
     * @var string
     */
    public string $name;

    /**
     *
     * @var string
     */
    public string $type;

    /**
     *
     * @var int
     */
    public int $age;

    /**
     *
     * @return string
     * 
     */
    public function eat(): string
    {
        return "The $this->type $this->name is eating";
    }


    /**
     *
     * @return string
     * 
     */
    public function sleep(): string
    {
        return "The $this->type $this->name is sleeping";
    }

}