<?php
session_start();
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\User\User;

$yearMonthDay = date("Y-m-d");
$hourSecond = date("h:i:s");

$userDeactiveAt = $yearMonthDay." ".$hourSecond;

$b = new User();

if (isset($_POST['deactivateUserId'])) {

  $b->setData($_POST);
  $b->deactivate_user($userDeactiveAt);
}

if (isset($_POST['activateUserId'])) {
  $b->setData($_POST);
  $b->activate_user($userDeactiveAt);
}

 ?>
