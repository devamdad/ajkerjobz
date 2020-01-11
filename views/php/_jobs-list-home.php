<?php
include_once ("_header.php");

include_once ("vendor/autoload.php");
use App\Category\Category;

$b = new Category();
$categoryPerList = 6;
$offset = 0;
$list1 = $b->show($categoryPerList,$offset);
// echo "<pre>";
// print_r($list1);
// die();
  echo '<div class="col-lg-3 col-xs-12 col-md-3 col-sm-3 clear-p">';
  foreach ($list1 as $item) {
  ?>
    <p class="clear-m"><a href="<?php echo $baseUrl."views/layout/category-job.php?category=".$item['category_id']?>"><?php echo $item['category'] ;?></a></p>
  <?php
  }
  echo '</div>' ;
  ?>

<!-- row 2 -->
  <?php
  $categoryPerList = 6;
  $offset = 6;
  $list1 = $b->show($categoryPerList,$offset);
  echo '<div class="col-lg-3 col-xs-12 col-md-3 col-sm-3 clear-p">';
  foreach ($list1 as $item) {
  ?>
    <p class="clear-m"><a href="<?php echo $baseUrl."views/layout/category-job.php?category=".$item['category_id']?>"><?php echo $item['category'] ;?></a></p>
  <?php
  }
  echo '</div>' ;
  ?>

<!-- row 3 -->
  <?php
  $categoryPerList = 6;
  $offset = 12;
  $list1 = $b->show($categoryPerList,$offset);
  echo '<div class="col-lg-3 col-xs-12 col-md-3 col-sm-3 clear-p">';
  foreach ($list1 as $item) {
  ?>
    <p class="clear-m"><a href="<?php echo $baseUrl."views/layout/category-job.php?category=".$item['category_id']?>"><?php echo $item['category'] ;?></a></p>
  <?php
  }
  echo '</div>' ;
  ?>

<!-- row 4 -->
    <?php
    $categoryPerList = 6;
    $offset = 18;
    $list1 = $b->show($categoryPerList,$offset);
    echo '<div class="col-lg-3 col-xs-12 col-md-3 col-sm-3 clear-p">';
    foreach ($list1 as $item) {
    ?>
      <p class="clear-m"><a href="<?php echo $baseUrl."views/layout/category-job.php?category=".$item['category_id']?>"><?php echo $item['category'] ;?></a></p>
    <?php
    }
    echo '</div>' ;
    ?>
