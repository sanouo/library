<?php

require("model/connexion.php");
require("model/Manager.php");

// load all class
function loadClass($class)
{
  require("entities/" . $class . ".php");
}
spl_autoload_register("loadClass");







include "views/indexView.php";
