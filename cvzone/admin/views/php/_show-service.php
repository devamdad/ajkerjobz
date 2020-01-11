<?php

include_once ("../../vendor/autoload.php");
use App\Service\Service;


$b = new Service();

$row = $b->show($_SESSION['userId']);

if (isset($row)) {
  foreach ($row as $value) {
    echo '<tr>';
      echo '<td>';
        echo '<span class="'.$value['img'].' fa-3x"></span>';
      echo '</td>';

      echo '<td>';
        echo $value['title'];
      echo '</td>';
      echo '<td>';
        echo '<a href="update-service.php?id='.$value['id'].'" class="btn btn-success">Update</a>';
      echo '</td>';
      echo '<td>';
        echo '<a  data-row="'.$value['id'].'" class="btn btn-danger delete-service">Delete</a>';
      echo '</td>';
    echo '</tr>';
  }

}



 ?>
