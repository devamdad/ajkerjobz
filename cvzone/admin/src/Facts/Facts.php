<?php

namespace App\Facts;
use PDO;

class Facts
{
    private $userId='';
    private $title='';
    private $itemNumber='';
    private $icon='';
    private $updateTitle='';
    private $updateItemNumber='';
    private $updateIcon='';
    private $createAt='';
    private $updateAt='';
    private $deleteAt='';


    public function setData($value='')
    {
        $this->userId=$_SESSION['userId'];
        if (array_key_exists("title",$value)) {
            $this->title=$value['title'];
        }
        if (array_key_exists("item",$value)) {
            $this->itemNumber=$value['item'];
        }
        if (array_key_exists("icon",$value)) {
            $this->icon=$value['icon'];
        }
        if (array_key_exists("postDate",$value)) {
            $this->createAt=$value['postDate'];
        }

        if (array_key_exists("updateTitle",$value)) {
            $this->updateTitle=$value['updateTitle'];
        }
        if (array_key_exists("updateItem",$value)) {
            $this->updateItemNumber=$value['updateItem'];
        }
        if (array_key_exists("updateIcon",$value)) {
            $this->updateIcon=$value['updateIcon'];
        }
        if (array_key_exists("updateDate",$value)) {
            $this->updateAt=$value['updateDate'];
        }


        return $this;

    }

    // public function checkdate()
    // {
    //   echo $this->userId;
    // }


    public function index()
    {
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
            $query = "INSERT INTO  facts (user_id,title,no_of_items,img,created_at) VALUES (:ui,:t,:ni,:i,:ca)";
            $stmt = $pdo->prepare($query);
            $stmt->execute(array(
                'ui' => $this->userId,
                't' => $this->title,
                'ni' => $this->itemNumber,
                'i' => $this->icon,
                'ca' => $this->createAt,

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
          $query = "SELECT * FROM  facts WHERE user_id='$value' and deleted_at='0000-00-00 00:00:00'";
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
          $query = "SELECT * FROM  facts WHERE id='$value'";
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
          $query = "UPDATE  facts SET title = :t, no_of_items = :ni, img = :i, updated_at = :ua WHERE id='$value'";
          $stmt = $pdo->prepare($query);
          $stmt->execute(array(
            't' => $this->updateTitle,
            'ni' => $this->updateItemNumber,
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
