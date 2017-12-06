<?php

require("model/connexion.php");
require("model/ManagerBook.php");
require("entities/Book.php");



// create object $manager
$manager = new ManagerBook($bdd);
// call function get

$update = $manager->get($_GET['id']);





require("views/updateView.php");
