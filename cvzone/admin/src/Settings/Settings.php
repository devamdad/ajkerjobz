<?php
namespace App\Settings;
use PDO;


class Settings
{
  private $userId='';
  private $title='';
  private $fullname='';
  private $address='';
  private $description='';
  // private $profileImg='';

  private $createAt='';
  private $updateAt='';
  private $deleteAt='';

  private $profileImg ='';
  private $profileImg_loc ='';
  private $profileImg_size ='';
  private $profileImg_type ='';

  private $newImageName = '';


  public function setData($value='')
  {
    $this->userId=$_SESSION['userId'];
    if (array_key_exists("title",$value)) {
      $this->title=$value['title'];
    }
    if (array_key_exists("fullname",$value)) {
      $this->fullname=$value['fullname'];
    }
    if (array_key_exists("address",$value)) {
      $this->address=$value['address'];
    }
    if (array_key_exists("featuredImg",$value)) {
      $this->profileImg=$value['featuredImg'];
    }
    if (array_key_exists("descr",$value)) {
      $this->description=$value['descr'];
    }
    if (array_key_exists("postDate",$value)) {
      $this->updateAt=$value['postDate'];
    }
    if (array_key_exists("featuredImg",$value)) {
      $this->profileImg =$value['featuredImg']['name'];
      $this->profileImg_loc =$value['featuredImg']['tmp_name'];
      $this->profileImg_size =$value['featuredImg']['size'];
      $this->profileImg_type =$value['featuredImg']['type'];
    }

    // echo $this->profileImg_type;

    return $this;

  }

  public function imageUpload()
  {
    $temp = explode(".",$this->profileImg);
    $this->newImageName = $this->userId.'.'.end($temp);
    if(move_uploaded_file($this->profileImg_loc,"../../assets/images/user/".$this->newImageName)){
      return true;
    }else {
      return false;
    }
  }




  public function index()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "UPDATE  settings SET title = :t, fullname = :fn, description = :des, address = :a, featured_img = :fi, updated_at = :ua WHERE user_id='$this->userId'";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          't' => $this->title,
          'fn' => $this->fullname,
          'des' => $this->description,
          'a' => $this->address,
          'fi' => $this->newImageName,
          'ua' => $this->updateAt
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
        $query = "SELECT * FROM  settings WHERE user_id='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }



}



 ?>
