<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Work\Work;


$b = new Work();

if (isset($_POST)) {
  // echo "<pre>";
  // print_r($_POST);
  // echo $_FILES['img']['name'];
  // die();

  if (empty($_POST['title']) || empty($_POST['category']) || empty($_POST['descr'])) {
    $_SESSION['errorWork']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/add-work.php");
  }
  else {
    $b->setData($_POST);
    $b->setData($_FILES);
    $flag = $b->imageUpload();

    if ($flag) {
      $insert=$b->index();
      if (empty($insert)) {
        $_SESSION['WorkSuccess']="Update Setting Successfull";
        header("location:".$baseUrl."admin/views/layout/add-work.php");
      }
    }else {
      $_SESSION['errorWork']="Image Upload Failed";
      header("location:".$baseUrl."admin/views/layout/add-work.php");
    }

  }



}



 ?>
