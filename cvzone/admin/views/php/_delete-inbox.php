<?php

$inboxId=$_POST['contentId'];
$deleted_at = date("Y-m-d")." ".date("h:i:s");

try{
    $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
    $query = "UPDATE  contacts SET deleted_at = :da WHERE id='$inboxId'";
    $stmt = $pdo->prepare($query);
    $stmt->execute(array(
      'da' => $deleted_at
    ));
    $data = $stmt->fetchAll();
    return $data;

}catch (PDOException $e){
    echo 'Error: '. $e->getMessage();
}





?>