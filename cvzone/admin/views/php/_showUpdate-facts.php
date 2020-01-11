<?php

include_once ("../../vendor/autoload.php");
use App\Facts\Facts;


$b = new Facts();

$row = $b->showUpdate($factsId);

if (isset($row)) {
// echo "<pre>";
// print_r($row);
// die();

$updateShowImg = $row[0]['img'];
$updateShowNoOfItem = $row[0]['no_of_items'];
$updateShowTitle = $row[0]['title'];

}



 ?>
