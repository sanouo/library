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
      if (is_string($name))
      {
          $this->name = htmlspecialchars($name);
          return $this;
      }
    }


    public function setAddress($address)
    {
      if (is_string($address))
      {
        $this->address = htmlspecialchars($address);
        return $this;
      }
    }


    public function setCity($city)
    {
      if (is_string($city))
      {
        $this->city = htmlspecialchars($city);
        return $this;
      }
    }


}
