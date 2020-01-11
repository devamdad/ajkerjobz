<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Skill\Skill;


$b = new Skill();

if (isset($_POST)) {

  // echo "<pre>";
  // print_r($_POST);
  // die();
  if (empty($_POST['updateTitle']) || empty($_POST['UpdateLevel']) || empty($_POST['UpdateExperience']) || empty($_POST['updateTag']) || empty($_POST['updateDescr'])) {
    $_SESSION['errorSkill']="Field should not empty";
    header("location:".$baseUrl."admin/views/layout/update-skill.php?id=".$_POST['skillId']);
  }
  else {
    $b->setData($_POST);
    $insert=$b->update($_POST['skillId']);
    if (empty($insert)) {
      $_SESSION['skillSuccess']="Skill Update Successfull";
      header("location:".$baseUrl."admin/views/layout/update-skill.php?id=".$_POST['skillId']);
    }
  }



}



 ?>
