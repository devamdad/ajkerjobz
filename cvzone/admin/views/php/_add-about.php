<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\About\About;


$b = new About();

if (isset($_POST)) {
  if (preg_match("/[^+0-9]+/",$_POST['phone'])) {
    $_SESSION['errorTitle']="Invalid phone number";
    header("location:".$baseUrl."admin/views/layout/add-about.php");
  }
  else {
    $b->setData($_POST);
    $insert=$b->index();
    if (empty($insert)) {
      $_SESSION['aboutSuccess']="About Insert Successfull";
      header("location:".$baseUrl."admin/views/layout/add-about.php");
    }
  }



}



 ?>
