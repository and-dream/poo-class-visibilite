<?php
require_once './Player.php';

class Warrior extends Player
{
/**
 *
 * @var int
 */
private int $arrow = 5;

public function __construct(string $name, int $arrow)
{
    $this->name = $name;
    $this->arrow = $arrow;
}

/**
 *
 * @return  int
 */ 
public function getArrow()
{
return $this->arrow;
}

/**
 *
 * @param  int  $arrow
 *
 * @return  self
 */ 
public function setArrow(int $arrow)
{
$this->arrow = $arrow;

return $this;
}

public function hit()
{
    $this->life = $this->life - 15;
}

}
