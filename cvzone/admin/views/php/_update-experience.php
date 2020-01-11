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
  if (empty($_POST['updateDesignation']) || empty($_POST['updateCompanyName']) || empty($_POST['updateStartsDate']) || empty($_POST['updateCompanyLocation'])) {
    $_SESSION['errorExperience']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/update-experience.php?id=".$_POST['experienceId']);
  }
  else {
    $b->setData($_POST);
    $insert=$b->update($_POST['experienceId']);
    if (empty($insert)) {
      $_SESSION['experienceSuccess']="Experience Update Successfull";
      header("location:".$baseUrl."admin/views/layout/update-experience.php?id=".$_POST['experienceId']);
    }
  }



}



 ?>
