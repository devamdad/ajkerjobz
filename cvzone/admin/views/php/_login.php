<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Login\Login;


$b = new Login();

if (isset($_POST)) {
  $b->setData($_POST);
  $data = $b->findUser();
  // echo "<pre>";
  // print_r($data);
  // print_r($_POST);
  // die();
  if ($_POST['loginUsername'] == $data[0]['username'] || $_POST['loginUsername'] == $data[0]['email']) {
    if ($_POST['LoginPassword']===$data[0]['password']) {
      $_SESSION['username']=$data[0]['username'];
      $_SESSION['userId']=$data[0]['unique_id'];
      header("location:".$baseUrl."admin/views/layout/home.php");

    }else {
      $_SESSION['error']="Username or Password not matched";
      header("location:".$baseUrl."admin/");
    }

  }else {
    $_SESSION['error']="Invalive Username or Email";
    header("location:".$baseUrl."admin/");
  }
}


// $b->setData($_POST);


 ?>
