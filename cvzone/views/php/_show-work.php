<?php
include_once ("../vendor/autoload.php");
use App\Work\Work;

$b = new Work();

$b->setData($userViewId);

$rowWork= $b->show();

if (!empty($rowWork)) {

$workModalId = 1;
foreach ($rowWork as $item) {
// echo "<lol>";
// print_r($item);
// die();

?>

<figure class="effect-milo">
    <img src="../admin/assets/images/work/<?php echo $item['img']; ?>" alt="img11" width="282" height="222" />
    <figcaption>
        <span class="label"><?php echo $item['category'] ;?></span>
        <div class="portfolio_button">
            <h3><?php echo $item['title'] ;?></h3>
            <a href="<?php echo '.work'.$workModalId;?>" class="open_popup" data-effect="mfp-zoom-out">
                <i class="hovicon effect-9 sub-b"><i class="fa fa-search"></i></i>
            </a>
        </div>
        <div class="mfp-hide mfp-with-anim work_desc <?php echo 'work'.$workModalId; ?>">
            <div class="col-md-6">
                <div class="image_work">
                    <img src="../admin/assets/images/work/<?php echo $item['img']; ?>" alt="img" width="560" height="420">
                </div>
            </div>
            <div class="col-md-6">
                <div class="project_content">
                    <h2 class="project_title"><?php echo $item['title'] ;?></h2>
                    <p class="project_desc">
                      <?php echo $item['description'] ;?>
                    </p>
                </div>
            </div>
            <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
            <div style="clear:both"></div>
        </div>
    </figcaption>
</figure>

<?php
$workModalId++;
}
}
?>
