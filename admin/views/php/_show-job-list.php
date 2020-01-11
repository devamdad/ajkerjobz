<?php
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Job\Job;

$b = new Job();
$row = $b->find_job();

// echo "<pre>";
// print_r($page_slug);
// die();



foreach ($row as $value) {
$employer = $b->find_employer($value['employer_id']);
if (!empty($employer)) {

?>
<tr>
  <td><?php echo $value['job_title']; ?></td>
  <td><?php echo $employer[0]['user_name']; ?></td>
  <?php
    $category = $b->find_category($value['job_category']);
   ?>
  <td><?php echo $category[0]['category']; ?></td>
  <td><?php echo $value['salary']; ?></td>
  <td><?php echo $value['job_location']; ?></td>

    <?php
    if ($value['job_status']=='1') {
      echo '<td class="text-success">Active</td>';
      echo '<td><a  class="btn btn-success" disabled="disabled">Activate</a></td>';
      echo '<td><a  class="btn btn-danger deactive-job" data-row="'.$value['job_id'].'">Deactivate</a></td>';
    }else {
      echo '<td class="text-danger">Deactive</td>';
      echo '<td><a  class="btn btn-success active-job" data-row="'.$value['job_id'].'">Activate</a></td>';
      echo '<td><a  class="btn btn-danger" disabled="disabled">Deactivate</a></td>';
    }
     ?>
</tr>

<?php
  }
}
?>
