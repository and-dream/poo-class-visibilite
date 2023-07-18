<?php

class Book
{
    /**
     *
     * @var string
     */
    private string $title;

    /**
     *
     * @var string
     */
    private string $author;

    /**
     *
     * @var int
     */
    private int $pages;
    
    /**
     *
     * @var int
     */
    private int $year;

    public function __construct(string $title, string $author, int $pages, int $year)
    {
      $this->title = $title;
      $this->author = $author;
      $this->pages = $pages;
      $this->year = $year;  
    }

    public function read(): string
    {
        return "Je lis le livre $this->title écrit par $this->author";
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;
        return $this;
    }

    public function getAuthor(): string
    {
        return $this->author;;
    }

    public function setPages(int $pages): self
    {
        $this->pages = $pages;
        return $this;
    }

    public function getPages(): int
    { 
        return $this->pages;
    }

    /**
     * Get the value of year
     *
     * @return  int
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @param  int  $year
     *
     * @return  self
     */ 
    public function setYear(int $year)
    {
        $this->year = $year;

        return $this;
    }
}