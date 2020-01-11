<?php

	include_once ("../../vendor/autoload.php");
    use App\Education\Education;

    $educat = new Education();

    $shows = $educat->setData($_GET)->show_education($_SESSION['userId']);

		// echo "<pre>";
		// print_r($shows);
		// echo $_SESSION['userId'];
		// die();
 ?>
