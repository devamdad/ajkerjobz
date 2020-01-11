<?php

include_once ("../../vendor/autoload.php");
use App\TopData\TopData;


$b = new TopData();

$totalEmployers = $b->find_total_employers();
$totalCvZone = $b->find_total_cvzone();
$totalJobPost = $b->find_total_jobpost();

$deactiveEmployers = $b->find_deactive_employers();
$deactiveCvZone = $b->find_deactive_cvzone();
$hideJobPost = $b->find_hide_jobpost();


 ?>
