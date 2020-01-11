<?php
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Job\Job;

$b = new Job();

$row= $b->find_spotlight_job();
// echo "<pre>";
// print_r($row);
// die();
foreach ($row as $value) {
  $employers= $b->find_employer($value['employer_id']);
  if (!empty($employers)) {
    $category= $b->find_category($value['job_category']);
  ?>
  <a href="<?php echo $baseUrl."views/layout/job-details.php?job=".$value['job_id']?>">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 spotlight-job-list">
      <div class="bg-light fix">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 spotlight-job-list-img">
          <img src="<?php echo $baseUrl.'admin_master/assets/images/employers/'.$employers[0]['image'] ?>" alt="" class="img-responsive center-block">
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
          <p class="clear-m"><?php echo $value['job_title'] ?></p>
          <p class="clear-m"><span class="fa fa-check"></span> <?php echo $category[0]['category'] ?></p>
          <p class="clear-m"><span class="fa fa-check"></span> <?php echo $value['job_location'] ?></p>
        </div>
      </div>
    </div>
  </a>
  <?php
  }
}
  ?>
