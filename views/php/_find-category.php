<?php
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Job\Job;

$b = new Job();

$category= $b->find_category($_GET['category']);
$categoryName = $category[0]['category'];
// echo "<pre>";
// print_r($row);
// die();

  ?>
