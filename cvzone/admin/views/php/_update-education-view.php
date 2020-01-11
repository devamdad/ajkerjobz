<?php 

	include_once ("../../vendor/autoload.php");
    use App\Education\Education;

    $educat = new Education();

    $show = $educat->setData($_GET)->singleShow();