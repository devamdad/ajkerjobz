<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Skill\Skill;


$b = new Skill();

if (isset($_POST)) {
  // echo "<pre>";
  // print_r($_POST);
  //
  // die();

  if (empty($_POST['title']) || empty($_POST['level']) || empty($_POST['experience']) || empty($_POST['tag']) || empty($_POST['descr'])) {
    $_SESSION['errorSkill']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/add-skill.php");
  }
  else {
    $b->setData($_POST);
    $insert=$b->index();
      if (empty($insert)) {
        $_SESSION['SkillSuccess']="Update Skill Successfull";
        header("location:".$baseUrl."admin/views/layout/add-skill.php");
      }


  }



}



 ?>
