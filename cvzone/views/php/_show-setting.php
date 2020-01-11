<?php
include_once ("../vendor/autoload.php");
use App\Settings\Settings;

$b = new Settings();

$b->setData($userViewId);

$row= $b->show();
if (!empty($row)) {
  $name = $row[0]['fullname'];
  $userTitle = $row[0]['title'];
  $userLocation = $row[0]['address'];
  $userImg = $row[0]['featured_img'];
}


?>
