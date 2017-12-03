<?php

// class User
class User {
  protected $id;
  protected $name;
  protected $address;
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

    public function getAddress()
    {
        return $this->address;
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


    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }


    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }


}
