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


// call function for select all users
$info = $managerUser->getUser();


require("views/userView.php");
