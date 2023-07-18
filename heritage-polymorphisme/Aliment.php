<?php

class Aliment
{
    /**
     *
     * @var int
     */
    private int $DatePeremption;

    public function setDate($DatePeremption): self
    {
        $this->DatePeremption = $DatePeremption;
        return $this;
    }

    public function getDate($DatePeremption): int
    {
        return $this->DatePeremption;
    }

}