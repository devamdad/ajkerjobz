<?php

include_once ("../../vendor/autoload.php");
use App\TopData\TopData;


$b = new TopData();
// echo "<pre>";
// print_r($employer);
// die();
$employer = $b->find_employer($_SESSION['username']);

$totalJobPost = $b->find_total_job($employer);

$liveJobPost = $b->find_live_job($employer);
$lastUpdated = $b->find_last_update($employer);



 ?>
