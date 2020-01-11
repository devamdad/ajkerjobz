<?php

ob_start();

$pg='views/layout/home';

$page=$pg.".php";

if(file_exists($page)){
require_once $page ;

}else{
echo "Page Not Found";
}


 ?>
