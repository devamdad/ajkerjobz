<?php
session_start();
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\CreateAdmin\CreateAdmin;


$b = new CreateAdmin();

// echo "<pre>";
// print_r($_POST);
// die();


if (isset($_POST)) {


  if (!preg_match("/^[_a-zA-Z0-9]*$/",$_POST['userName'])) {
    $_SESSION['signupError']="No space or special character in user name";
    header("location:".$baseUrl."admin_master/#signup");
  }
  elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $_SESSION['signupError']="Invalid email format";
    header("location:".$baseUrl."admin_master/#signup");
  }
  else {
    // die();
    $b->setData($_POST);
    $maxUser = $b->create_userId();
    $hash = $b->create_hash();
    $finalPass = $b->password_encrypt($_POST['password'],$hash);
    $insert = $b->index($maxUser+1,$finalPass,$hash);
    if (empty($insert)) {
      $_SESSION['regSuccess']="Thanks for registration<br/>Admin will approve your account.";
      header("location:".$baseUrl."admin_master/#signup");
    }


  }



}



 ?>
