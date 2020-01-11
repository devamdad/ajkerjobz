<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Settings\Settings;


$b = new Settings();

if (isset($_POST)) {
  // echo "<pre>";
  // print_r($_POST);
  // echo $_FILES['featuredImg']['name'];
  // die();

  if (empty($_POST['title']) || empty($_POST['fullname']) || empty($_POST['address']) || empty($_POST['descr'])) {
    $_SESSION['errorSetting']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/add-settings.php");
  }
  else {
    $b->setData($_POST);
    $b->setData($_FILES);
    $flag = $b->imageUpload();
    if ($flag) {
      $insert=$b->index();
      if (empty($insert)) {
        $_SESSION['SettingSuccess']="Update Setting Successfull";
        header("location:".$baseUrl."admin/views/layout/add-settings.php");
      }
    }else {
      $_SESSION['errorSetting']="Image Upload Failed";
      header("location:".$baseUrl."admin/views/layout/add-settings.php");
    }

  }



}



 ?>
