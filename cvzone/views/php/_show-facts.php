<?php
include_once ("../vendor/autoload.php");
use App\Facts\Facts;

$b = new Facts();

$b->setData($userViewId);

$rowFacts= $b->show();

if (!empty($rowFacts)) {

foreach ($rowFacts as $item) {
// echo "<lol>";
// print_r($item);
// die();

?>

<div class="facts-wrapper col-md-6">
    <div class="facts-icon"><i class="<?php echo $item['img']; ?>"></i>
    </div>
    <div class="facts-number"><?php echo $item['no_of_items']; ?></div>
    <div class="facts-description"><?php echo $item['title']; ?></div>
</div>

<?php
}
}
?>
