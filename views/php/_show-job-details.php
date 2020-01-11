<?php
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Job\Job;

$b = new Job();

$row= $b->find_job_details($_GET['job']);
$employers = $b->find_employer($row[0]['employer_id']);

$employerImage = $employers[0]['image'];
$employerDetails = $employers[0]['details'];

$jobTitle = $row[0]['job_title'];
$jobDescription = $row[0]['job_description'];
$jobSalary = $row[0]['salary'];
$jobLocation= $row[0]['job_location'];
$jobEmail= $row[0]['email'];
// echo "<pre>";
// print_r($row);
// die();

  ?>
