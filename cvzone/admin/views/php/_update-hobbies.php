<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Hobbies\Hobbies;


$b = new Hobbies();

if (isset($_POST)) {

  // echo "<pre>";
  // print_r($_POST);
  if (empty($_POST['updateIcon']) || empty($_POST['updateDescr']) || empty($_POST['updateTitle'])) {
    $_SESSION['errorHobbies']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/update-hobbies.php?id=".$_POST['hobbiesId']);
  }
  else {
    $b->setData($_POST);
    $insert=$b->update($_POST['hobbiesId']);
    if (empty($insert)) {
      $_SESSION['hobbiesSuccess']="Hobbies Update Successfull";
      header("location:".$baseUrl."admin/views/layout/update-hobbies.php?id=".$_POST['hobbiesId']);
    }
  }



}



 ?>
