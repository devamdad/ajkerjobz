<?php

include_once ("../../vendor/autoload.php");
use App\Skill\Skill;


$b = new Skill();

$row = $b->showUpdate($skillId);

if (isset($row)) {
// echo "<pre>";
// print_r($row);
// die();

$updateShowTitle = $row[0]['title'];
$updateShowLevel = $row[0]['level'];
$updateShowExperience = $row[0]['experience'];
$updateShowExperienceArea = $row[0]['experience_area'];
$updateShowDescription = $row[0]['description'];


}



 ?>
