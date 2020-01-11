<?php

	include_once ("../../vendor/autoload.php");
    use App\Awards\Awards;

    $educat = new Awards();

    $educat->setData($_POST)->trash();
?>
