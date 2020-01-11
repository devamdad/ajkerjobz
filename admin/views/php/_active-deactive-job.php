<?php
session_start();
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Job\Job;

$yearMonthDay = date("Y-m-d");
$hourSecond = date("h:i:s");

$jobDeactiveAt = $yearMonthDay." ".$hourSecond;

$b = new Job();

if (isset($_POST['deactivateJob'])) {

  $b->setData($_POST);
  $b->deactivate_job($jobDeactiveAt);
}

if (isset($_POST['activateJob'])) {
  $b->setData($_POST);
  $b->activate_job($jobDeactiveAt);
}

 ?>
