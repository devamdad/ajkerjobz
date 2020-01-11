<?php

include_once ("../../vendor/autoload.php");
use App\Hobbies\Hobbies;


$b = new Hobbies();

$row = $b->show($_SESSION['userId']);
// echo "<pre>";
// print_r($row);
// die();
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
        echo $value['description'];
      echo '</td>';
      echo '<td>';
        echo '<a href="update-hobbies.php?id='.$value['id'].'" class="btn btn-success">Update</a>';
      echo '</td>';
      echo '<td>';
        echo '<a  data-row="'.$value['id'].'" class="btn btn-danger delete-hobbies">Delete</a>';
      echo '</td>';
    echo '</tr>';
  }

}



 ?>
