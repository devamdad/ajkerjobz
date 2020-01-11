<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Facts\Facts;


$b = new Facts();

if (isset($_POST)) {

  // echo "<pre>";
  // print_r($_POST);
  if (empty($_POST['updateItem']) || empty($_POST['updateTitle']) || empty($_POST['updateIcon'])) {
    $_SESSION['errorFacts']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/update-facts.php?id=".$_POST['factsId']);
  }
  else {
    $b->setData($_POST);
    $insert=$b->update($_POST['factsId']);
    if (empty($insert)) {
      $_SESSION['factsSuccess']="Facts Update Successfull";
      header("location:".$baseUrl."admin/views/layout/update-facts.php?id=".$_POST['factsId']);
    }
  }



}



 ?>
