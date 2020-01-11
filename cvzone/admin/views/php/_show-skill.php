<?php

include_once ("../../vendor/autoload.php");
use App\Skill\Skill;


$b = new Skill();

$row = $b->show($_SESSION['userId']);

if (isset($row)) {
  foreach ($row as $value) {
    echo '<tr>';
      echo '<td>';
        echo '<p>'.$value['title'].'</p>';
      echo '</td>';
      echo '<td>';
        echo $value['level'];
      echo '</td>';
      echo '<td>';
        echo $value['experience'];
      echo '</td>';
      echo '<td>';
        echo $value['experience_area'];
      echo '</td>';
      echo '<td>';
        echo '<a href="update-skill.php?id='.$value['id'].'" class="btn btn-success">Update</a>';
      echo '</td>';
      echo '<td>';
        echo '<a  data-row="'.$value['id'].'" class="btn btn-danger delete-skill">Delete</a>';
      echo '</td>';
    echo '</tr>';
  }

}



 ?>
