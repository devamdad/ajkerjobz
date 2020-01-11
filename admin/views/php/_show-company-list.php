<?php
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Company\Company;

$b = new Company();
$row = $b->find_company();
// echo "<pre>";
// print_r($page_slug);
// die();
foreach ($row as $value) {

?>
<tr>
  <td><?php echo $value['user_name']; ?></td>
  <td><?php echo $value['email']; ?></td>
  <td><?php echo substr($value['created_at'],0,4); ?></td>

    <?php
    if ($value['token']=='0') {
      echo '<td class="text-success">Active</td>';
      echo '<td><a  class="btn btn-success" disabled="disabled">Activate</a></td>';
      echo '<td><a  class="btn btn-danger deactive-employer" data-row="'.$value['user_id'].'">Deactivate</a></td>';
    }else {
      echo '<td class="text-danger">Deactive</td>';
      echo '<td><a  class="btn btn-success active-employer" data-row="'.$value['user_id'].'">Activate</a></td>';
      echo '<td><a  class="btn btn-danger" disabled="disabled">Deactivate</a></td>';
    }
     ?>




</tr>

<?php
}
?>
