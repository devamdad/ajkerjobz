<?php
include_once ("../vendor/autoload.php");
use App\Service\Service;

$b = new Service();

$b->setData($userViewId);

$rowService= $b->show();

if (!empty($rowService)) {

foreach ($rowService as $item) {
// echo "<lol>";
// print_r($item);
// die();

?>
<div class="serv-wrap animated slideInDown">
    <span class="fa serv-icons <?php echo $item['img'];?>"></span>
    <h3><?php echo $item['title'];?></h3>
    <p><?php echo $item['description'];?></p>
    <div class="slide">
        <h4>Services</h4>
        <p style="padding:20px;"><?php echo $item['description'];?></p>
        <!-- <ul>
            <li><i class="fa fa-check"></i> Analytics </li>
            <li><i class="fa fa-check"></i> Active Search</li>
            <li><i class="fa fa-check"></i> Code Optimization</li>
            <li><i class="fa fa-check"></i> Link Building</li>
            <li><i class="fa fa-check"></i> Mobile Marketing</li>
            <li><i class="fa fa-check"></i> Landing Pages</li>
            <li><i class="fa fa-check"></i> Local SEO</li>
        </ul> -->
    </div>
</div>


<?php
}
}
?>
