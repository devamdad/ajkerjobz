<?php

include_once ("../../vendor/autoload.php");
use App\Facts\Facts;


$b = new Facts();

$row = $b->show($_SESSION['userId']);

if (isset($row)) {
  foreach ($row as $value) {
    echo '<tr>';
      echo '<td>';
        echo '<span class="'.$value['img'].' fa-3x"></span>';
      echo '</td>';
      echo '<td>';
        echo $value['no_of_items'];
      echo '</td>';
      echo '<td>';
        echo $value['title'];
      echo '</td>';
      echo '<td>';
        echo '<a href="update-facts.php?id='.$value['id'].'" class="btn btn-success">Update</a>';
      echo '</td>';
      echo '<td>';
        echo '<a  data-row="'.$value['id'].'" class="btn btn-danger delete-facts">Delete</a>';
      echo '</td>';
    echo '</tr>';
  }

}



 ?>
