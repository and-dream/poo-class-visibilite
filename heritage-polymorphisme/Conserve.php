<?php


class Conserve extends Aliment
{
/**
 *
 * @var array
 */
private array $listExcipient;

public function __construct(string $name, float $price, string $date, array $listExcipient)
{
 parent::__construct($name, $price, $date);
 $this->listExcipient = $listExcipient;   
}

public function setListExcipient(array $listExcipient): self
{
    $this->listExcipient = $listExcipient;
    return $this;
}


public function getListExcipient(): array
{
return $this->listExcipient;
}

// rappel : accéder à une propriété dans une class $this->
public function displayProduct(): string
{
  return   parent::displayProduct() . " et la liste des excipients est " . implode(", ", $this->listExcipient);
}
}