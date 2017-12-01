<?php

// class Account
class User {
  protected $id;
  protected $name;
  protected $adress;
  protected $city;


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

    public function getName()
    {
        return $this->name;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function getCity()
    {
        return $this->city;
    }


// setters
    public function setId($id)
    {
       $this->id = $id;
       return $this;
    }


    public function setName($name)
    {
          $this->name = $name;
          return $this;
    }


    public function setAdress($adress)
    {
        $this->adress = $adress;
        return $this;
    }


    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }


}
