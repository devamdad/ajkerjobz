<?php
session_start();
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Employer\Employer;

$b = new Employer();
//
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);
// die();

if (isset($_FILES['companyImage']['tmp_name'])) {
  if ($_POST['descr']=='<br>') {
    $_SESSION['errorMessage']='Company Overview Empty';
    header("location:".$baseUrl."admin_master/views/layout/update-company-profile.php");
  }
  else {
    $b->setData($_POST);
    $Img = $_FILES['companyImage']['name'];
    $Img_loc =$_FILES['companyImage']['tmp_name'];
    $temp = explode(".",$Img);
    $newImageName = $_POST['emlpoyers'].'.'.end($temp);


    if(move_uploaded_file($Img_loc,"../../assets/images/employers/".$newImageName)){
      $result = $b->update_with_image($newImageName);
      if (empty($result)) {
        $_SESSION['profileSuccess']='Profile Update Successful';
        header("location:".$baseUrl."admin_master/views/layout/update-company-profile.php");
      }
    }

  }
}
if (isset($_POST) && empty($_FILES['companyImage']['tmp_name'])) {
  if ($_POST['descr']=='<br>') {
    $_SESSION['errorMessage']='Company Overview Empty';
    header("location:".$baseUrl."admin_master/views/layout/update-company-profile.php");
  }
  else {
    $b->setData($_POST);
    $result = $b->update_without_image();
    if (empty($result)) {
      $_SESSION['profileSuccess']='Details Update Successful';
      header("location:".$baseUrl."admin_master/views/layout/update-company-profile.php");
    }
  }
}



?>
