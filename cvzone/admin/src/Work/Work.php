<?php
namespace App\Work;
use PDO;


class Work
{
  private $userId='';
  private $title='';
  private $category='';
  private $description='';
  // private $profileImg='';

  private $updateTitle='';
  private $updateCategory='';
  private $updateDescription='';

  private $createAt='';
  private $updateAt='';
  private $deleteAt='';

  private $workImg ='';
  private $workImg_loc ='';
  private $workImg_size ='';
  private $workImg_type ='';

  private $newImageName = '';
  private $newUpdateImageName='';


  public function setData($value='')
  {
    $this->userId=$_SESSION['userId'];
    if (array_key_exists("title",$value)) {
      $this->title=$value['title'];
    }
    if (array_key_exists("category",$value)) {
      $this->category=$value['category'];
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
    if (array_key_exists("updateCategory",$value)) {
      $this->updateCategory=$value['updateCategory'];
    }
    if (array_key_exists("updateDescr",$value)) {
      $this->updateDescription=$value['updateDescr'];
    }
    if (array_key_exists("updateDate",$value)) {
      $this->updateAt=$value['updateDate'];
    }
    if (array_key_exists("img",$value)) {
      $this->workImg =$value['img']['name'];
      $this->workImg_loc =$value['img']['tmp_name'];
      $this->workImg_size =$value['img']['size'];
      $this->workImg_type =$value['img']['type'];
    }

    // echo $this->workImg;

    return $this;

  }

  public function imageUpload()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT MAX(id) FROM portfolios";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $tempId = $data[0][0];
        $tempId = $temp+1;
        // echo $tempId;


    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
    $temp = explode(".",$this->workImg);
    $this->newImageName = $this->category.$tempId.$this->userId.'.'.end($temp);
    // echo $this->newImageName;

    if(move_uploaded_file($this->workImg_loc,"../../assets/images/work/".$this->newImageName)){
      return true;
    }else {
      return false;
    }
  }

  public function updateImageUpload($value='',$cat='')
  {

    $temp = explode(".",$this->workImg);
    $this->newUpdateImageName = $cat.$value.$this->userId.'.'.end($temp);
    // echo $this->newImageName;

    if(move_uploaded_file($this->workImg_loc,"../../assets/images/work/".$this->newUpdateImageName)){
      return true;
    }else {
      return false;
    }
  }




  public function index()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "INSERT INTO portfolios (user_id, title, description, img, category, created_at) VALUES (:ua, :t, :des, :i, :c, :ca)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          'ua' => $this->userId,
          't' => $this->title,
          'des' => $this->description,
          'i' => $this->newImageName,
          'c' => $this->category,
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
        $query = "SELECT * FROM  portfolios WHERE user_id='$value' and deleted_at='0000-00-00 00:00:00'";
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
        $query = "SELECT * FROM  portfolios WHERE id='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function update($value='',$imgUploadFlag='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        if ($imgUploadFlag=='1') {
          $query = "UPDATE  portfolios SET title = :t, description = :des, img = :i, category = :c, updated_at = :ua WHERE id='$value'";
          $stmt = $pdo->prepare($query);
          $stmt->execute(array(
            't' => $this->updateTitle,
            'des' => $this->updateDescription,
            'i' => $this->newUpdateImageName,
            'c' => $this->updateCategory,
            'ua' => $this->updateAt

          ));
        }
        else {
          $query = "UPDATE  portfolios SET title = :t, description = :des, category = :c, updated_at = :ua WHERE id='$value'";
          $stmt = $pdo->prepare($query);
          $stmt->execute(array(
            't' => $this->updateTitle,
            'des' => $this->updateDescription,
            'c' => $this->updateCategory,
            'ua' => $this->updateAt

          ));
        }

        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }



}



 ?>
