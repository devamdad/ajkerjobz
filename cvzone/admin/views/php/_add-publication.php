<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Post\Post;


$b = new Post();

if (isset($_POST)) {
  // echo "<pre>";
  // print_r($_POST);
  //
  // die();

  if (empty($_POST['title']) || empty($_POST['category']) || empty($_POST['tag']) || empty($_POST['descr'])) {
    $_SESSION['errorPublication']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/add-publication.php");
  }
  else {
    $b->setData($_POST);
    $insert=$b->index();
      if (empty($insert)) {
        $_SESSION['PublicationSuccess']="Add Publication Successfull";
        header("location:".$baseUrl."admin/views/layout/add-publication.php");
      }


  }



}



 ?>
