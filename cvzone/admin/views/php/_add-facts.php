<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Facts\Facts;


$b = new Facts();

if(preg_match("/[^a-zA-Z0-9]+/",$_POST['item'])){
    $_SESSION['errorItem']="Invalid item number";
    header("location:".$baseUrl."admin/views/layout/add-facts.php");
}
else{
  if (empty($_POST['title']) || empty($_POST['item']) || empty($_POST['icon']) ) {
    $_SESSION['errorItem']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/add-facts.php");
  }
  else {
    $b->setData($_POST);
    $insert=$b->index();
    if (empty($insert)) {
        $_SESSION['factsSuccess']="Fact Insert Successfull";
        header("location:".$baseUrl."admin/views/layout/add-facts.php");
    }
  }


}
//echo "<pre>";
//echo $_SESSION['userId'];
//echo "<br>";
//print_r($_POST);
