<?php

include_once ("../../vendor/autoload.php");
use App\Service\Service;


$b = new Service();

$row = $b->showUpdate($serviceId);

if (isset($row)) {
// echo "<pre>";
// print_r($row);
// die();
$updateShowTitle = $row[0]['title'];
$updateShowImg = $row[0]['img'];
$updateShowDescription = $row[0]['description'];


}



 ?>
