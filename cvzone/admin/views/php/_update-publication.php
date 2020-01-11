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

  if (empty($_POST['updateTitle']) || empty($_POST['updateCategory']) || empty($_POST['updateTag']) || empty($_POST['updateDescr'])) {
    $_SESSION['errorPublication']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/update-publication.php?id=".$_POST['publicationId']);
  }
  else {
    $b->setData($_POST);
    $insert=$b->update($_POST['publicationId']);
      if (empty($insert)) {
        $_SESSION['PublicationSuccess']="Add Publication Successfull";
        header("location:".$baseUrl."admin/views/layout/update-publication.php?id=".$_POST['publicationId']);
      }


  }



}



 ?>
