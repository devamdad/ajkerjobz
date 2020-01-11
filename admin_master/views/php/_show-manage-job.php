<?php

include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Job\Job;

$b = new Job();

$employer = $b->find_employer($_SESSION['username']);
// echo "<pre>";
// print_r($employer);
// die();
$row = $b->find_job_list($employer);

foreach ($row as $value) {

?>
<tr>
  <td><?php echo $value['job_title'] ?></td>
  <td><?php echo substr($value['created_at'],0,10) ?></td>
  <td><a href="update-job.php?id=<?php echo $value['job_id'] ?>" class="btn btn-success">Update</a></td>
  <td><a class="btn btn-danger delete-job" data-row="<?php echo $value['job_id'] ?>">Delete</a></td>
</tr>

<?php
}
?>
