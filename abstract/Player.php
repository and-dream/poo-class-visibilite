<?php

abstract class Player {
    /**
     *
     * @var string
     */
    protected string $name;

    /**
     *
     * @var int
     */
    /**
     *
     * @var int
     */
    protected int $life = 100;


    /**
     *
     * @var int
     */
    protected int $score = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }


    /**
     *
     * @return  string
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function hit()
    {
        $this->life = $this->life - 10;
    }

    /**
     * Get the value of life
     *
     * @return  int
     */ 
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @param  int  $life
     *
     * @return  self
     */ 
    public function setLife(int $life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get the value of score
     *
     * @return  int
     */ 
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set the value of score
     *
     * @param  int  $score
     *
     * @return  self
     */ 
    public function setScore(int $score)
    {
        $this->score = $score;

        return $this;
    }
}