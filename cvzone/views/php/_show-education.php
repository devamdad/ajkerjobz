<?php
include_once ("../vendor/autoload.php");
use App\Education\Education;

$b = new Education();

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
        <span class="fa fa-graduation-cap"></span>
        <div class="resume-date">
          <?php
          $passingYear = substr($item['passing_year'],0,4);
          ?>
            <span><?php echo $passingYear-4; ?></span>
            <div class="separator"></div>
            <span><?php echo $passingYear ;?></span>
        </div>
    </div>
    <div class="timeline-item">
        <span class="timeline-location"><i class="fa fa-map-marker"></i><?php echo $item['education_board'];?></span>
        <h3 class="timeline-header"><?php echo $item['title'];?></h3>
        <div class="timeline-body">
            <h4><?php echo $item['institute'];?></h4>
            <p><?php echo "Major In ".$item['main_subject']." With CGPA ".$item['result'];?></p>
            <span></span>
        </div>
    </div>
</li>

<?php
}
}
?>
