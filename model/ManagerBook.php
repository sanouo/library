<?php

class ManagerBook{

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

  // Execute INSERT in the database
  public function add($book)
  {
  $q = $this->bdd->prepare('INSERT INTO book(title, author, description, releaseDate, category, available) VALUES(:title, :author, :description, :releaseDate, :category, :available)');
  $q->bindValue(':title', $book->getTitle());
  $q->bindValue(':author', $book->getAuthor());
  $q->bindValue(':description', $book->getDescription());
  $q->bindValue(':releaseDate', $book->getReleaseDate());
  $q->bindValue(':category', $book->getCategory());
  $q->bindValue(':available', $book->getAvailable());
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


  // Execute a SELECT all request database
  public function getBooks()
    {
      $req = $this->bdd->prepare('SELECT * FROM book');
      $req->execute();
      $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
      foreach ($donnees as $key => $value)
      {
        $donnees[$key] = new Book($value);
      }
      return $donnees;
    }




    // public function try($category)
    //   {
    //     $category = (string) $category;
    //     $q = $this->bdd->query('SELECT * FROM book WHERE category = '.$category);
    //     $donnees = $q->fetch(PDO::FETCH_ASSOC);
    //     return new Book($donnees);
    //
    //   }
    // Execute a SELECT request database where category
    public function try($sort)
      {

        $req = $this->bdd->prepare('SELECT * FROM book WHERE category = :sort');
          $req->bindValue(':sort', $sort);
        $req->execute();
        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach ($donnees as $key => $value)
        {
          $donnees[$key] = new Book($value);
        }
        return $donnees;
      }


  // Execute a UPDATE request database
  public function getUpdate($book)
    {
      $q = $this->bdd->prepare ('UPDATE book SET title= :title, author= :author, description= :description, releaseDate= :releaseDate, category:category, available:available WHERE id = :id');
      $q->bindValue(':id', $book->getId());
      $q->bindValue(':title', $book->getTitle());
      $q->bindValue(':author', $book->getAuthor());
      $q->bindValue(':description', $book->getDescription());
      $q->bindValue(':releaseDate', $book->getReleaseDate());
      $q->bindValue(':category', $book->getCategory());
      $q->bindValue(':available', $book->getAvailable());
      $q->execute();
     }


  //  Execute a DELETE request
  public function delete($supprim)
 {
     $req = $this->bdd->exec('DELETE FROM book WHERE id = '.$supprim);
     header("Location: index.php");
  }
}
