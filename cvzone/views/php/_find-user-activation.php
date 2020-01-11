<?php
include '_header.php';
include_once ("../vendor/autoload.php");
use App\Settings\Settings;

$b = new Settings();


$data = $b->find_user_activation($userViewId);
// echo "<pre>";
// print_r($data);
// die();
if ($data['is_active']==0) {
  header("location:".$baseUrl."cvzone/views/layout/404.php");
}
elseif (empty($data['id'])) {
  header("location:".$baseUrl."cvzone/views/layout/404.php");
}

?>
