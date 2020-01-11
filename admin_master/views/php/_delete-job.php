<?php

include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Job\Job;

$jobId = $_POST['contentId'];
$date = date("Y-m-d");
$time = date("h:i:s");
$date_and_time = date('Y-m-d H:i:s', strtotime("$date $time"));

// echo "<pre>";
// echo $date_and_time;
// die();

$b = new Job();

$b->delete_job($jobId,$date_and_time);



?>
