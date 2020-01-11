<?php
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Admin\Admin;

$b = new Admin();
$adminId=$_GET['id'];
$row = $b->find_update_admin($adminId);

$userId = $row[0]['user_id'];
$userName = $row[0]['user_name'];
$email = $row[0]['email'];
$status = $row[0]['status'];
$token = $row[0]['token'];

?>
