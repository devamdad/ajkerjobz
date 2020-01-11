<?php
include_once ("../vendor/autoload.php");
use App\Skill\Skill;

$b = new Skill();

$b->setData($userViewId);

$rowSkill= $b->show();

if (!empty($rowSkill)) {

foreach ($rowSkill as $item) {
// echo "<lol>";
// print_r($item);
// die();

?>
<span class="content-title"><?php echo $item['title'];?></span>
<div class="skolls">
    <span class="skill-description"><?php echo $item['description'];?></span>
    <div class="bar-main-container">
        <div class="wrap">
          <?php
            if ($item['level']=="EXPERT") {
              $dataPercent=86;
            }
            elseif ($item['level']=="BEGINER") {
              $dataPercent=44;
            }
            else {
              $dataPercent=60;
            }
          ?>
            <div class="bar-percentage" data-percentage="<?php echo $dataPercent;?>"></div>
            <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : <?php echo $item['level'];?></span>
            <span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : <?php echo $item['experience'];?></span>
            <div class="bar-container">
                <div class="bar"></div>
            </div>
            <?php
            $n = substr_count($item['experience_area'],",");
            $tempTag = $item['experience_area'];
              for ($i=0; $i < $n+1 ; $i++) {
                $a = strpos($tempTag,",");
                if ($a) {
                  echo '<span class="label">'.substr($tempTag,0,$a).'</span>';
                  $a++;
                  $tempTag = substr($tempTag,$a);
                }else {
                  echo '<span class="label">'.$tempTag.'</span>';

                }

              }
            ?>
            <!-- <span class="label">Php</span>
            <span class="label">Asp</span>
            <span class="label">Wordpress</span> -->
            <div style="clear:both;"></div>
        </div>
    </div>
</div>


<?php
}
}
?>
