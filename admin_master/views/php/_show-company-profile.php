<?php

include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Employer\Employer;

$b = new Employer();

$employer = $b->find_employer($_SESSION['username']);

$row = $b->find_company_details($employer);
// echo "<pre>";
// print_r($row);
// die();

$companyImage = $row['image'];
$companyDetails = $row['details'];

?>
