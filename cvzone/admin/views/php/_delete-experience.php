<?php

$experienceId=$_POST['contentId'];
$deleted_at = date("Y-m-d")." ".date("h:i:s");

try{
    $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
    $query = "UPDATE  experiences SET deleted_at = :da WHERE id='$experienceId'";
    $stmt = $pdo->prepare($query);
    $stmt->execute(array(
      'da' => $deleted_at
    ));
    $data = $stmt->fetchAll();
    return $data;

}catch (PDOException $e){
    echo 'Error: '. $e->getMessage();
}


// $sql="DELETE FROM tk_jonojibon_poribar_tbl where member_id='$memberId'";
// $query = $connection->query($sql);
// if ($query) {
// $GLOBALS['update_member_success']="Successfully Deleted Admin ".$memberId;
// // header("location:add-admin.php");
// }else{
// mysql_error();
// }






?>
