<?php
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\User\User;

$b = new User();
$row = $b->find_users();

foreach ($row as $value) {

?>
<tr>
  <td><?php echo $value['username']; ?></td>
  <td><?php echo $value['email']; ?></td>
  <td><?php echo substr($value['created_at'],0,4); ?></td>

    <?php
    if ($value['is_active']=='1') {
      echo '<td class="text-success">Active</td>';
      echo '<td><a  class="btn btn-success" disabled="disabled">Activate</a></td>';
      echo '<td><a  class="btn btn-danger deactive-user" data-row="'.$value['unique_id'].'">Deactivate</a></td>';
    }else {
      echo '<td class="text-danger">Deactive</td>';
      echo '<td><a  class="btn btn-success active-user" data-row="'.$value['unique_id'].'">Activate</a></td>';
      echo '<td><a  class="btn btn-danger" disabled="disabled">Deactivate</a></td>';
    }
     ?>




</tr>

<?php
}
?>
