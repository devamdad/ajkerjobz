
<?php
include '../php/_top-data-super.php';

// echo "<pre>";
// print_r();
// die();
 ?>

<!-- top tiles -->
<div class="row tile_count">
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-users"></i> Total Employers</span>
    <div class="count green"><?php echo $totalEmployers; ?></div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-users"></i> Deactive Employers</span>
    <div class="count"><?php echo $deactiveEmployers; ?></div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> CV Zone User</span>
    <div class="count"><?php echo $totalCvZone ?></div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Deactive CV Zone User </span>
    <div class="count"><?php echo $deactiveCvZone ?></div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-briefcase"></i> Live Job Post</span>
    <div class="count"><?php echo $totalJobPost ?></div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-briefcase"></i> Hide Job Post</span>
    <div class="count"><?php echo $hideJobPost ?></div>
  </div>


</div>
<!-- /top tiles -->
