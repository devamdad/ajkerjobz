<?php

include_once ("../../vendor/autoload.php");
use App\Experience\Experience;


$b = new Experience();

$row = $b->showUpdate($experienceId);

if (isset($row)) {
// echo "<pre>";
// print_r($row);
// die();

$updateDesignation = $row[0]['designation'];
$updateCompanyName = $row[0]['company_name'];
$updateStartsDate = $row[0]['start_date'];
$updateEndDate = $row[0]['end_date'];
$updateCompanyLocation = $row[0]['company_location'];

}



 ?>
