<?php

include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Job\Job;

$b = new Job();

$jobId= $_GET['id'];
$row = $b->find_single_job($jobId);
$category = $b->find_single_category($row['job_category']);

// echo "<pre>";
// print_r($category);
// die();
$categoryId = $row['job_category'];
$jobCategory = $category['category'];
$jobTitle = $row['job_title'];
$jobSalary = $row['salary'];
$jobLocation = $row['job_location'];
$jobEmail = $row['email'];
$jobDetails = $row['job_description'];


?>
