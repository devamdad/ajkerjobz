<?php

$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'php38';

$connection = new mysqli($db_hostname, $db_username, $db_password, $db_name);

if ($connection->connect_error) {
    die('Connection failed: '.$connection->connect_error);
}

?>
