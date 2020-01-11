<?php

namespace App\Search;
use PDO;

class Search
{
    private $searchTbl = '';
    private $searchKeyId = '';
    private $searchMatch = '';

  public function setData($value='')
  {

    if(array_key_exists("value",$value)){
        $this->searchTbl ="users";
        $this->searchKeyId="username";
        $this->searchMatch=$value['value'];
    }
      if(array_key_exists("location",$value)){
          $this->searchTbl ="settings";
          $this->searchKeyId="address";
          $this->searchMatch=$value['location'];
      }
      if(array_key_exists("work",$value)){
          $this->searchTbl ="abouts";
          $this->searchKeyId="title";
          $this->searchMatch=$value['work'];
      }

  }



    public function show($value='',$tbl='')
    {
        if(empty($tbl)){
            $tbl_name = "users";
            $keyId = "username";
            $id = "value";
            $index1 = "unique_id";
            $index2 = "username";
            $page = "layout/search-result";
        }
        if($tbl=="searchName"){
            $tbl_name = "users";
            $keyId = "username";
            $id = "value";
            $index1 = "unique_id";
            $index2 = "username";
            $page = "layout/search-result";
        }
        if($tbl=="searchLocation"){
            $tbl_name = "settings";
            $keyId = "address";
            $id = "location";
            $index1 = "address";
            $index2 = "address";
            $page = "layout/search-result";
        }
        if($tbl=="searchWork"){
            $tbl_name = "abouts";
            $keyId = "title";
            $id = "work";
            $index1 = "title";
            $index2 = "title";
            $page = "layout/search-result";
        }

      try{
          $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
          $query = "SELECT * FROM  $tbl_name WHERE $keyId LIKE '$value%' and deleted_at='0000-00-00 00:00:00' ";
          $stmt = $pdo->prepare($query);
          $stmt->execute();
          $data = $stmt->fetchAll();
          // echo "<pre>";
          // print_r($data);
          if (!empty($data)) {
            foreach ($data as $item) {
              echo '<a href="http://localhost/AjkerJob/cvzone/views/'.$page.'.php?'.$id.'='.$value.'"><p>'.$item[$index2].'</p></a>';
            }
          }else {
            echo '<a href=""><p>Not Found</p></a>';
          }



          // return $data[0]["username"];

      }catch (PDOException $e){
          echo 'Error: '. $e->getMessage();
      }
    }

    public function showSearch(){


        try{
            $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
            $query = "SELECT * FROM $this->searchTbl  WHERE $this->searchKeyId LIKE '$this->searchMatch%' and deleted_at='0000-00-00 00:00:00' ";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
            // echo "<pre>";
            // print_r($data);
            // die();
             return $data;

        }catch (PDOException $e){
            echo 'Error: '. $e->getMessage();
        }
    }

    public function findWork($value=''){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
            $query = "SELECT * FROM settings WHERE user_id = '$value' and deleted_at='0000-00-00 00:00:00'";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
//             echo "<pre>";
//             print_r($data);
             return $data[0]['title'];

        }catch (PDOException $e){
            echo 'Error: '. $e->getMessage();
        }
    }

    public function findLocation($value=''){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
            $query = "SELECT * FROM settings WHERE user_id = '$value' and deleted_at='0000-00-00 00:00:00'";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
//             echo "<pre>";
//             print_r($data);
             return $data[0]['address'];

        }catch (PDOException $e){
            echo 'Error: '. $e->getMessage();
        }
    }

    public function findName($value=''){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
            $query = "SELECT * FROM settings WHERE user_id = '$value' and deleted_at='0000-00-00 00:00:00'";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
//             echo "<pre>";
//             print_r($data);
             return $data[0]['fullname'];

        }catch (PDOException $e){
            echo 'Error: '. $e->getMessage();
        }
    }

    public function findImage($value=''){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
            $query = "SELECT * FROM settings WHERE user_id = '$value' and deleted_at='0000-00-00 00:00:00'";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
//             echo "<pre>";
//             print_r($data);
             return $data[0]['featured_img'];

        }catch (PDOException $e){
            echo 'Error: '. $e->getMessage();
        }
    }



}



?>
