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

  if (empty($_POST['updateTitle']) || empty($_POST['updateIcon']) || empty($_POST['updateDescr'])) {
    $_SESSION['errorService']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/update-service.php?id=".$_POST['serviceId']);
  }
  else {
    $b->setData($_POST);
    $insert=$b->update($_POST['serviceId']);
      if (empty($insert)) {
        $_SESSION['ServiceSuccess']="Update Service Successfull";
        header("location:".$baseUrl."admin/views/layout/update-service.php?id=".$_POST['serviceId']);
      }


  }



}



 ?>
