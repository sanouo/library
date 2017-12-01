<?php

require("model/connexion.php");
require("model/ManagerBook.php");

// load all class
function loadClass($class)
{
  require("entities/" . $class . ".php");
}
spl_autoload_register("loadClass");



// create object $manager
$manager = new ManagerBook($bdd);


if (isset($_POST['addBook']))
{
  $donnees = new Book($_POST);
  // call function add (for insert in the database)
  $manager->add($donnees);
  // header("Location: index.php");

}

$donnees = $manager->getBooks();


// call function delete
if(isset($_GET['supprim']))
{
  $donnees= $manager->delete($_GET['supprim']);
}








require("views/indexView.php");
