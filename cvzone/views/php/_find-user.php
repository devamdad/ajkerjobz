<?php
include_once ("../vendor/autoload.php");
use App\Settings\Settings;

$b = new Settings();

$userToFind = $_GET['user'];
$b->setData($userToFind);

$row= $b->show();

$row= $b->show();
if (!empty($row)) {
  $userToFindName = $row[0]['fullname'];
}
// echo $userToFindName;
// die();

?>
