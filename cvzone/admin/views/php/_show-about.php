<?php

include_once ("../../vendor/autoload.php");
use App\About\About;



$b = new About();

$row = $b->show($_SESSION['userId']);

if (isset($row)) {
//    echo "<pre>";
//    print_r($row);
//    die();

    $firstTitle = $row[0]['title'];
    $firstPhone = $row[0]['phone'];
    $firstBio = $row[0]['bio'];
}



 ?>
