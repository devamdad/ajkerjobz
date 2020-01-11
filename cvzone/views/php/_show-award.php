<?php
include_once ("../vendor/autoload.php");
use App\Awards\Awards;

$b = new Awards();

$b->setData($userViewId);

$rowEducation= $b->show();

if (!empty($rowEducation)) {

foreach ($rowEducation as $item) {
// echo "<lol>";
// print_r($item);
// die();

?>

<li>
    <div class="resume-tag">
        <span class="fa fa-star-o"></span>
        <div class="resume-date">
          <?php
          $passingYear = substr($item['year'],0,4);
          ?>
            
            <div class="separator"></div>
            <span><?php echo $passingYear ;?></span>
        </div>
    </div>
    <div class="timeline-item">
        <span class="timeline-location"><i class="fa fa-map-marker"></i><?php echo $item['location'];?></span>
        <h3 class="timeline-header"><?php echo $item['organization'];?></h3>
        <div class="timeline-body">
            <h4><?php echo $item['title'];?></h4>
            <p><?php echo $item['description'];?></p>
            <span></span>
        </div>
    </div>
</li>

<?php
}
}
?>
