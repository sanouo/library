<?php

require("model/connexion.php");
require("model/ManagerUser.php");

// load all class
function loadClass($class)
{
  require("entities/" . $class . ".php");
}
spl_autoload_register("loadClass");



// create object $manager
$managerUser = new ManagerUser($bdd);


if (isset($_POST['addUser']))
{
  $info = new User($_POST);
  // call function add (for insert in the database)
  $managerUser->add($info);
  // header("Location: index.php");

}

$info = $managerUser->getUser();




require("views/userView.php");
