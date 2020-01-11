<?php

include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Job\Job;

$b = new Job();

$employer = $b->find_employer($_SESSION['username']);
// echo "<pre>";
// print_r($employer);
// die();
$row = $b->find_job_categories();
echo '<option value="select">Select Job Category</option>';
foreach ($row as $value) {

?>
  <option value="<?php echo $value['category_id'] ?>"><?php echo $value['category'] ?></option>


<?php
}
?>
