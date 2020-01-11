<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Contact\Contact;


$b = new Contact();

if (isset($_POST)) {
  //
  // echo "<pre>";
  // print_r($_POST);
  $b->setData($_POST);
  $insert=$b->index();
  if (empty($insert)) {
    // $_SESSION['experienceSuccess']="Experience Insert Successfull";
    header("location:".$baseUrl."cvzone/views/index.php?user=".$_POST['contactSendToUser']);
  }

  // if (empty($_POST['designation']) || empty($_POST['companyName']) || empty($_POST['startsDate']) || empty($_POST['companyLocation'])) {
  //   $_SESSION['errorExperience']="Field should not empty";
  //   header("location:http://localhost/cvzone/admin/views/layout/add-experience.php");
  // }
  // else {
  //   $b->setData($_POST);
  //   $insert=$b->index();
  //   if (empty($insert)) {
  //     $_SESSION['experienceSuccess']="Experience Insert Successfull";
  //     header("location:http://localhost/cvzone/admin/views/layout/add-experience.php");
  //   }
  // }



}



 ?>
