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
  if (empty($_POST['updateTitle']) || empty($_POST['updateCategory']) || empty($_POST['updateDescr'])) {
    $_SESSION['errorWork']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/update-work.php?id=".$_POST['workId']);
  }
  else {
    $b->setData($_POST);


    if (!empty($_FILES['img']['name'])) {
      $b->setData($_FILES);
      $flag = $b->updateImageUpload($_POST['workId'],$_POST['updateCategory']);
      if ($flag) {
        $insert=$b->update($_POST['workId'],$imgUploadNeed='1');
        if (empty($insert)) {
          $_SESSION['WorkSuccess']="Work Update Successfull";
          header("location:".$baseUrl."admin/views/layout/update-work.php?id=".$_POST['workId']);
        }
      }else {
        $_SESSION['errorWork']="Image Upload Failed";
        header("location:".$baseUrl."admin/views/layout/update-work.php?id=".$_POST['workId']);
      }
    }
    else {
      $insert=$b->update($_POST['workId']);
      if (empty($insert)) {
        $_SESSION['WorkSuccess']="Work Update Successfull";
        header("location:".$baseUrl."admin/views/layout/update-work.php?id=".$_POST['workId']);
      }
    }

  }



}



 ?>
