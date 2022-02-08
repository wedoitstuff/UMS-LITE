<?php
/*
================================================================================
WE DO IT STUFF - CLOUD PLATFORM (PRO)
AUTHOR: Jack Wright

**DO NOT MODIFY THIS FILE**
================================================================================
*/
require '../vendor/autoload.php';


if(file_exists("../.env")){
  $dotenv = Dotenv\Dotenv::createImmutable("../");
  $dotenv->load();
  //Config file exists:: so run application
 new Application();
}
elseif (isset($_POST['siteName'])) {
  //Complete installation;
  new Build();
}
else{
  new Installation();
}
