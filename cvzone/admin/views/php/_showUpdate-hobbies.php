<?php

include_once ("../../vendor/autoload.php");
use App\Hobbies\Hobbies;


$b = new Hobbies();

$row = $b->showUpdate($hobbiesId);

if (isset($row)) {
// echo "<pre>";
// print_r($row);
// die();

$updateShowImg = $row[0]['img'];
$updateShowTitle = $row[0]['title'];
$updateShowDescription = $row[0]['description'];

}



 ?>
