<?php

	include_once ("../../vendor/autoload.php");
    use App\Awards\Awards;

    $details = new Awards();

    $awards = $details->show_awards($_SESSION['userId']);


 ?>
