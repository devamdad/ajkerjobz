<?php
session_start();
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Admin\Admin;

if (array_key_exists("content",$_POST)) {
  $userNameToCheck = $_POST['content'];
}

$b = new Admin();

$b->check_username($userNameToCheck);

 ?>
