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


// call function add (for insert in the database)
if (isset($_POST['addBook']))
{
  $donnees = new Book($_POST);
  $manager->add($donnees);
}


// call function getBooks for select all elements
$donnees = $manager->getBooks();


// call function delete
if(isset($_GET['supprim']))
{
  $donnees= $manager->delete($_GET['supprim']);
}


// call function for select to sort items by category
if(isset($_POST['search']))
{
  $donnees = $manager->try($_POST['sort']);
var_dump($_POST);
}


require("views/indexView.php");
