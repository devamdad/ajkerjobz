<?php

include_once ("../../vendor/autoload.php");
use App\Settings\Settings;



$b = new Settings();

$row = $b->show($_SESSION['userId']);

if (isset($row)) {
//    echo "<pre>";
//    print_r($row);
//    die();

    $firstTitle = $row[0]['title'];
    $firstFullName = $row[0]['fullname'];
    $firstAddress = $row[0]['address'];
    $firstProfileImg = $row[0]['featured_img'];
    $firstDescription = $row[0]['description'];
}



 ?>
