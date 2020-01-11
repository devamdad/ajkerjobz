<?php

include_once ("../../vendor/autoload.php");
use App\Work\Work;


$b = new Work();

$row = $b->showUpdate($_GET['id']);

if (!empty($row)) {
    $updateTitle = $row[0]['title'];
    $updateCategory =$row[0]['category'];
    $remainImg =$row[0]['img'];
    $remainDescr =$row[0]['description'];

}
else {
  $updateTitle = '';
  $updateCategory ='';
  $remainImg ='';
  $remainDescr ='';
}


 ?>
