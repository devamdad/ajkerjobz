<?php
session_start();
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Company\Company;

$yearMonthDay = date("Y-m-d");
$hourSecond = date("h:i:s");

$adminDeactiveAt = $yearMonthDay." ".$hourSecond;

$b = new Company();

if (isset($_POST['deactivateAdminId'])) {

  $b->setData($_POST);
  $b->deactivate_admin($adminDeactiveAt);
}

if (isset($_POST['activateAdminId'])) {
  $b->setData($_POST);
  $b->activate_admin($adminDeactiveAt);
}

 ?>
