<?php
session_start();
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Login\Login;

if (array_key_exists("content",$_POST)) {
  $userNameToCheck = $_POST['content'];
}

$b = new Login();

$b->check_username($userNameToCheck);

 ?>
