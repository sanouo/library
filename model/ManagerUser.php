<?php

class ManagerUser{

  protected $bdd;

  public function __construct($bdd)
  {
    $this->setBdd($bdd);
  }

  // setters for bdd
  public function setBdd(PDO $bdd)
  {
    $this->bdd = $bdd;
  }



  // Execute a SELECT request database
  public function getUser()
    {
      $req = $this->bdd->prepare('SELECT * FROM user');
      $req->execute();
      $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
      foreach ($donnees as $key => $value)
      {
        $donnees[$key] = new User($value);
      }
      return $donnees;
    }



}
