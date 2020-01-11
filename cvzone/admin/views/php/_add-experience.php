<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Experience\Experience;


$b = new Experience();

if (isset($_POST)) {
  //
  // echo "<pre>";
  // print_r($_POST);
  if (empty($_POST['designation']) || empty($_POST['companyName']) || empty($_POST['startsDate']) || empty($_POST['companyLocation'])) {
    $_SESSION['errorExperience']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/add-experience.php");
  }
  else {
    $b->setData($_POST);
    $insert=$b->index();
    if (empty($insert)) {
      $_SESSION['experienceSuccess']="Experience Insert Successfull";
      header("location:".$baseUrl."admin/views/layout/add-experience.php");
    }
  }



}



 ?>
