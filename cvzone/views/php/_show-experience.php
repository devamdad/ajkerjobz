<?php
include_once ("../vendor/autoload.php");
use App\Experience\Experience;

$b = new Experience();

$b->setData($userViewId);

$rowEducation= $b->show();

if (!empty($rowEducation)) {

foreach ($rowEducation as $item) {
// echo "<lol>";
// print_r($item);
// die();

?>
<li>
    <div class="teaching-tag">
        <span class="fa fa-suitcase"></span>
        <div class="teaching-date">
            <span><?php echo substr($item['end_date'],0,4) ;?></span>
            <div class="separator"></div>
            <span><?php echo substr($item['start_date'],0,4)  ;?></span>
        </div>
    </div>
    <div class="timeline-item">
        <h3 class="timeline-header"><?php echo $item['designation'];?></h3>
        <div class="timeline-body">
            <h4><?php echo $item['company_name'];?></h4>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
        </div>
    </div>
</li>


<?php
}
}
?>
