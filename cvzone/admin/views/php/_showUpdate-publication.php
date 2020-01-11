<?php

include_once ("../../vendor/autoload.php");
use App\Post\Post;


$b = new Post();

$row = $b->showUpdate($publicationId);

if (isset($row)) {
// echo "<pre>";
// print_r($row);
// die();

$updateShowTitle = $row[0]['title'];
$updateShowCategory = $row[0]['categories'];
$updateShowTags = $row[0]['tags'];
$updateShowDescription = $row[0]['description'];


}



 ?>
