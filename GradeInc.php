<?php

$includeDir = "./include/";
$scriptFiles = array("Config.php", "Roster.php", "Assignment.php", "Course.php", "Egg.php", "ExitCodes.php");

foreach($scriptFiles as $file) {
  include_once("$includeDir$file");
}

//cse-apps authorization service;
include_once("/srv/www/php/include/CSEAuthenticator.php");

?>
