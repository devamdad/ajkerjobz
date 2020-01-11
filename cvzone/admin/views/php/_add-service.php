<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Service\Service;


$b = new Service();

if (isset($_POST)) {
  // echo "<pre>";
  // print_r($_POST);
  //
  // die();

  if (empty($_POST['title']) || empty($_POST['icon']) || empty($_POST['descr'])) {
    $_SESSION['errorService']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/add-service.php");
  }
  else {
    $b->setData($_POST);
    $insert=$b->index();
      if (empty($insert)) {
        $_SESSION['ServiceSuccess']="Add Service Successfull";
        header("location:".$baseUrl."admin/views/layout/add-service.php");
      }


  }



}



 ?>
