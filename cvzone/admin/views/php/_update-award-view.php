<?php

	include_once ("../../vendor/autoload.php");
    use App\Awards\Awards;

    $award = new Awards();

    $shows = $award->setData($_GET)->singleShow();
		// echo "<pre>";
		// print_r($shows);
		// die();

 ?>
