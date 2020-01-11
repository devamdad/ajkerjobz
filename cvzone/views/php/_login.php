<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Login\Login;

$b = new Login();

if (isset($_POST)) {
  $b->setData($_POST);
  $data = $b->findUser();
  if ($_POST['loginUsername']==$data[0]['username'] || $_POST['loginUsername']==$data[0]['email']) {
    if ($_POST['LoginPassword']===$data[0]['password']) {
      header("location:".$baseUrl."cvzone/views");
    }else {
      $_SESSION['error']="Username or Password not matched";
      header("location:".$baseUrl."cvzone/");
    }

  }else {
    $_SESSION['error']="Invalive Username or Email";
    header("location:".$baseUrl."cvzone/");
  }
}


// $b->setData($_POST);


 ?>
