<?php

include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\TopNavigation\TopNavigation;

$b = new TopNavigation();

$employer = $b->find_employer($_SESSION['username']);

$row = $b->find_company_details($employer);
// echo "<pre>";
// print_r($row);
// die();

$employerImage = $row['image'];


?>
