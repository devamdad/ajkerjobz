
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
    <div class="count green"><?php echo $totalUser-1; ?></div>
    <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> CV Zone </span>
    <div class="count"><?php echo $totalSuperAdmin ?></div>
    <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span> -->
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Live Job Post</span>
    <div class="count"><?php echo $totalModeratorAdmin ?></div>
    <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
  </div>


</div>
<!-- /top tiles -->
