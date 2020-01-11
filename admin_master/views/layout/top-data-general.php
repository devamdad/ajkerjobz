
<?php
include '../php/_top-data-general.php';

// echo "<pre>";
// print_r();
// die();
 ?>

<!-- top tiles -->
<div class="row tile_count">
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-briefcase"></i> Total Job Post</span>
    <div class="count green">
      <?php
      if (isset($totalJobPost)) {
        echo $totalJobPost;
      }else {
        echo '0';
      }

      ?>
    </div>
    <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
  </div>

  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-briefcase"></i> Live Job Offer</span>
    <div class="count">
      <?php
      if (isset($liveJobPost)) {
        echo $liveJobPost;
      }else {
        echo '0';
      }
      ?></div>
    <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-clock-o"></i> Last Profile Updated</span>
    <div class="count"><?php echo $lastUpdated ?></div>
    <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
  </div>




</div>
<!-- /top tiles -->
