<?php
session_start();
include '_header.php';

include_once ("../../vendor/autoload.php");
use App\Awards\Awards;



$awards = new Awards();


if (!empty($_POST)) {
  if (preg_match("/[A-Z]+/",$_POST['title'])) {
    $_POST['title'] = filter_var($_POST['title'], FILTER_SANITIZE_STRING);

    $insert = $awards->setData($_POST)->addAwards();
    if (empty($insert)) {
      $_SESSION['educationSuccess']="Award Insert Successfull";
      header("location:".$baseUrl."admin/views/layout/add-awards.php");
    }
  }else {

      $_SESSION['errorTitle']="Invalid Education Title";
      header("location:".$baseUrl."admin/views/layout/add-awards.php");

  }

} else{
     $_SESSION['errorTitle']="Input Field Should not be Empty";
      header("location:".$baseUrl."admin/views/layout/add-awards.php");
}



 ?>
