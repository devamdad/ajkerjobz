<?php
namespace App\Service;
use PDO;


class Service
{
  private $userId='';
  private $title='';
  private $icon='';
  private $description='';
  // private $profileImg='';

  private $createAt='';
  private $updateAt='';
  private $deleteAt='';

  private $updateTitle ='';
  private $updateIcon='';
  private $updateDescription='';



  public function setData($value='')
  {
    $this->userId=$_SESSION['userId'];
    if (array_key_exists("title",$value)) {
      $this->title=$value['title'];
    }
    if (array_key_exists("icon",$value)) {
      $this->icon=$value['icon'];
    }
    if (array_key_exists("descr",$value)) {
      $this->description=$value['descr'];
    }
    if (array_key_exists("postDate",$value)) {
      $this->createAt=$value['postDate'];
    }

    if (array_key_exists("updateTitle",$value)) {
      $this->updateTitle=$value['updateTitle'];
    }
    if (array_key_exists("updateIcon",$value)) {
      $this->updateIcon=$value['updateIcon'];
    }
    if (array_key_exists("updateDescr",$value)) {
      $this->updateDescription=$value['updateDescr'];
    }
    if (array_key_exists("updateDate",$value)) {
      $this->updateAt=$value['updateDate'];
    }

    // echo $this->profileImg_type;

    return $this;

  }




  public function index()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "INSERT INTO  services (user_id, title, description, img, created_at) VALUES (:ui, :t, :des, :i, :ca)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          'ui' => $this->userId,
          't' => $this->title,
          'des' => $this->description,
          'i' => $this->icon,
          'ca' => $this->createAt
        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function show($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT * FROM  services WHERE user_id='$value' and deleted_at ='0000-00-00 00:00:00'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function showUpdate($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT * FROM  services WHERE id='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function update($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "UPDATE  services SET title = :t, description = :des, img = :i, updated_at = :ua WHERE id='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          't' => $this->updateTitle,
          'des' => $this->updateDescription,
          'i' => $this->updateIcon,
          'ua' => $this->updateAt

        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }



}



 ?>
