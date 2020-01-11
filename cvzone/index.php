<?php

ob_start();

$pg='search';

$page=$pg.".php";

if(file_exists($page)){
require_once $page ;

}else{
echo "Page Not Found";
}


 ?>
