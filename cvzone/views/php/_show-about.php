<?php
include_once ("../vendor/autoload.php");
use App\About\About;

$b = new About();

$b->setData($userViewId);

$row= $b->show();

if (!empty($row)) {
  $userPhone = $row[0]['phone'];
  $userWork = $row[0]['title'];
  $userBio = $row[0]['bio'];
}
$row1= $b->showEmail();
if (!empty($row1)) {
  $userEmail = $row1[0]['email'];
}


?>
