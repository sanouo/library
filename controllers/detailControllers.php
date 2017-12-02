<?php

require("model/connexion.php");
require("model/ManagerBook.php");
require("entities/Book.php");

// load all class
function loadClass($class)
{
  require("entities/" . $class . ".php");
}
spl_autoload_register("loadClass");


// create object $manager
$manager = new ManagerBook($bdd);

$detail = $manager->get($_GET['id']);

require("views/detailView.php");
