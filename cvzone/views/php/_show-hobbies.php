<?php
include_once ("../vendor/autoload.php");
use App\Hobbies\Hobbies;

$b = new Hobbies();

$b->setData($userViewId);

$rowhobby= $b->show();

if (!empty($rowhobby)) {

foreach ($rowhobby as $item) {
// echo "<lol>";
// print_r($item);
// die();

?>

<div class="hobbie-wrapper row">
    <div class="hobbie-icon col-md-3"><i class="<?php echo $item['img']; ?>"></i>
    </div>
    <div class="hobbie-description col-md-9">

        <p><?php echo $item['description'];?></p>
    </div>
    <div style="clear:both;"></div>
</div>

<?php
}
}
?>
