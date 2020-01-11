<?php
session_start();
include '_header.php';

include_once ("../../vendor/autoload.php");
use App\Awards\Awards;

    $updated = new Awards();

    // $show = $updated->setData($_GET)->singleShow();


 if (!empty($_POST)) {
  if (preg_match("/[A-Z]+/",$_POST['title'])) {
    $_POST['title'] = filter_var($_POST['title'], FILTER_SANITIZE_STRING);

    $insert = $updated->setData($_POST)->AwardUpdate();
		if (empty($insert)) {
      $_SESSION['educationSuccess']="Award Update Successfull";
      header("location:".$baseUrl."admin/views/layout/update-award.php?id=".$_POST['id']);
    }
  }else {

      $_SESSION['errorTitle']="Invalid Education Title";
      header("location:".$baseUrl."admin/views/layout/update-award.php?id=".$_POST['id']);

  }

} else{
     $_SESSION['errorTitle']="Input Field Should not be Empty";
      header("location:".$baseUrl."admin/views/layout/update-award.php?id=".$_POST['id']);
}



 ?>
