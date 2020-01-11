<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Hobbies\Hobbies;


$b = new Hobbies();

if (isset($_POST)) {

  // echo "<pre>";
  // print_r($_POST);
  // die();
  if (empty($_POST['icon']) || empty($_POST['descr'])) {
    $_SESSION['errorHobbies']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/add-hobbies.php");
  }
  else {
    $b->setData($_POST);
    $insert=$b->index();
    if (empty($insert)) {
      $_SESSION['hobbiesSuccess']="Hobbies Insert Successfull";
      header("location:".$baseUrl."admin/views/layout/add-hobbies.php");
    }
  }



}



 ?>
