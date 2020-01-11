<?php
include_once ("../vendor/autoload.php");
use App\Post\Post;

$b = new Post();

$b->setData($userViewId);

$row= $b->show();

// $name = $row[0]['fullname'];
// $userTitle = $row[0]['title'];
// $userLocation = $row[0]['address'];
// $userImg = $row[0]['featured_img'];

if (!empty($row)) {

$publicationDetail = 1;

  foreach($row as $item){
    // echo "<pre>";
    // print_r($item['created_at']);
    // die();

?>


<div class="publication_item" >
    <div class="media">
        <a href="<?php echo '.publication-detail'.$publicationDetail ;?>" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
        <div class="date pull-left">
            <span class="day"><?php
            $monthArray  = array('-01-' => 'JAN', '-02-' => 'FEB', '-03-' => 'MAR', '-04-' => 'APR', '-05-' => 'MAY', '-06-' => 'JUN', '-07-' => 'JUL', '-08-' => 'AUG', '-09-' => 'SEP', '-10-' => 'OCT', '-11-' => 'NOV', '-12-' => 'DEC');
            $date = $item['created_at'];
            $year = substr($date,0,4);
            $m = substr($date,4,4);
            $month = $monthArray[$m];
            $day = substr($date,8,-8);
            $time = substr($date,10,-3);
            echo $day;
             ?></span>
            <span class="month"><?php echo $month;?></span>
            <span class="year"><?php echo $year;?></span>
        </div>
        <div class="media-body">
            <h3><?php echo $item['title'];?></h3>
            <!-- <h4>VANCOUVER - CANADA</h4> -->
            <span class="publication_description"><?php echo substr($item['description'],0,100) ;?></span>
        </div>
        <hr style="margin:8px auto">
        <?php
        $n = substr_count($item['tags'],",");
        $tempTag = $item['tags'];
          for ($i=0; $i < $n+1 ; $i++) {
            $a = strpos($tempTag,",");
            if ($a) {
              echo '<span class="label label-warning">'.substr($tempTag,0,$a).'</span>';
              $a++;
              $tempTag = substr($tempTag,$a);
            }else {
              echo '<span class="label label-primary">'.$tempTag.'</span>';

            }

          }
        ?>


        <span class="publication_authors"><strong><?php echo $name;?></strong></span>
    </div>
    <div class="mfp-hide mfp-with-anim <?php echo 'publication-detail'.$publicationDetail ;?> publication-detail">
        <div class="image_work">
            <img class="img-responsive" src="http://placehold.it/480x200" alt="img" width="480" height="200">
        </div>
        <div class="project_content">
            <h3 class="publication_title"><?php echo $item['title'];?></h3>
            <span class="publication_authors"><strong><?php echo $name;?></strong></span>
            <?php
            $n = substr_count($item['tags'],",");
            $tempTag = $item['tags'];
              for ($i=0; $i < $n+1 ; $i++) {
                $a = strpos($tempTag,",");
                if ($a) {
                  echo '<span class="label label-primary">'.substr($tempTag,0,$a).'</span>';
                  $a++;
                  $tempTag = substr($tempTag,$a);
                }else {
                  echo '<span class="label label-primary">'.$tempTag.'</span>';

                }

              }
            ?>
            <p class="project_desc">
              <?php echo $item['description'];?>
            </p>
        </div>
        <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
        <div style="clear:both"></div>
    </div>
</div>

<?php
$publicationDetail++;
 }
} ?>
