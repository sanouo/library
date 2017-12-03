<?php

// class Book
class Book {
  protected $id;
  protected $title;
  protected $author;
  protected $description;
  protected $releaseDate;
  protected $category;
  protected $available;


// function construct
  public function __construct(array $data){
    $this->hydrate($data);
  }


  // function hydrate
  public function hydrate(array $data)
  {
    foreach ($data as $key => $value) {
      $method = 'set' . ucfirst($key);
      if (method_exists($this,$method)) {
      $this->$method($value);
      }
    }
  }

  // getters
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getAvailable()
    {
        return $this->available;
    }

// setters
    public function setId($id)
    {
       $this->id = $id;
       return $this;
    }


    public function setTitle($title)
    {
      if (is_string($title))
      {
        $this->title = htmlspecialchars($title);
        return $this;
      }
    }


    public function setAuthor($author)
    {
      if (is_string($author))
      {
        $this->author = htmlspecialchars($author);
        return $this;
      }
    }


    public function setDescription($description)
    {
      if (is_string($description))
      {
        $this->description = htmlspecialchars($description);
        return $this;
      }
    }


    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }


    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }


    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }
}
