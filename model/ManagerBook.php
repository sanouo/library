<?php

class ManagerBook{

  protected $bdd;

  public function__construct($bdd)
  {
    $this->stBdd($bdd);
  }

  // setters for bdd
  public function setBdd(PDO $bdd)
  {
    $this->bdd = $bdd;
  }

  // Execute INSERT in the database
  public function add($book)
  {
    $q = $this->bdd->prepare('INSERT INTO book(title, author, description, release_date, category) VALUES(:title, :author, :description, :release_date, :category)')
  $q->bindValue(':title', $book->getTitle());
  $q->bindValue(':author', $book->getAuthor());
  $q->bindValue(':description', $book->getDescription());
  $q->bindValue(':release_date', $book->getRelease_date());
  $q->bindValue(':category', $book->getcategory());
  $q->execute();
  }

  // Execute a SELECT request in database where id
      public function get($id)
          {
            $id = (int) $id;
            $q = $this->bdd->query('SELECT * FROM book WHERE id = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Book($donnees);
          }


  // Execute a SELECT request database
      public function getBooks()
          {
            $req = $this->bdd->prepare('SELECT * FROM book');
            $req->execute();
            $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
            foreach ($donnees as $key => $value) {
                 $donnees[$key] = new Book($value);
            }
             return $donnees;
            }


  // Execute a UPDATE request database
       public function getUpdate($ook)
           {
             $q = $this->bdd->prepare ('UPDATE book SET title= :title, author= :author, description= :description, release_date= :release_date, category:category WHERE id = :id');
             $q->bindValue(':id', $book->getId());
             $q->bindValue(':title', $book->getTitle());
             $q->bindValue(':author', $book->getAuthor());
             $q->bindValue(':description', $book->getDescription());
             $q->bindValue(':release_date', $book->getRelease_date());
             $q->bindValue(':category', $book->getCategory());
             $q->execute();
           }

}