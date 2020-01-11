<?php

	include_once ("../../vendor/autoload.php");
    use App\Education\Education;

    $educat = new Education();

    $educat->setData($_POST)->trash();
?>
