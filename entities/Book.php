<?php

// class Account
class book {
  protected $id;
  protected $title;
  protected $author;
  protected $description;
  protected $release_date;
  protected $category;

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
        return $this->release_date;
    }

    public function getCategory()
    {
        return $this->category;
    }


// setters
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setReleaseDate($release_date)
    {
        $this->release_date = $release_date;
        return $this;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

}
