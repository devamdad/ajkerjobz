<?php

namespace App\Experience;
use PDO;

class Experience
{
    private $userId='';

    private $designation='';
    private $companyName='';
    private $startsDate='';
    private $endDate='';
    private $companyLocation='';

    private $updateDesignation='';
    private $updateCompanyName='';
    private $updateStartsDate='';
    private $updateEndDate='';
    private $updateCompanyLocation='';

    private $createAt='';
    private $updateAt='';
    private $deleteAt='';


    public function setData($value='')
    {
        $this->userId=$_SESSION['userId'];

        if (array_key_exists("designation",$value)) {
            $this->designation=$value['designation'];
        }
        if (array_key_exists("companyName",$value)) {
            $this->companyName=$value['companyName'];
        }
        if (array_key_exists("startsDate",$value)) {
            $this->startsDate=$value['startsDate'];
        }
        if (array_key_exists("endDate",$value)) {
            $this->endDate=$value['endDate'];
        }
        if (array_key_exists("companyLocation",$value)) {
            $this->companyLocation=$value['companyLocation'];
        }
        if (array_key_exists("postDate",$value)) {
            $this->createAt=$value['postDate'];
        }

        if (array_key_exists("updateDesignation",$value)) {
            $this->updateDesignation=$value['updateDesignation'];
        }
        if (array_key_exists("updateCompanyName",$value)) {
            $this->updateCompanyName=$value['updateCompanyName'];
        }
        if (array_key_exists("updateStartsDate",$value)) {
            $this->updateStartsDate=$value['updateStartsDate'];
        }
        if (array_key_exists("updateEndDate",$value)) {
            $this->updateEndDate=$value['updateEndDate'];
        }
        if (array_key_exists("updateCompanyLocation",$value)) {
            $this->updateCompanyLocation=$value['updateCompanyLocation'];
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
            $query = "INSERT INTO  experiences (user_id, designation, company_name, start_date, end_date, company_location, created_at) VALUES (:ui, :d, :cn, :sd, :ed, :cl, :ca)";
            $stmt = $pdo->prepare($query);
            $stmt->execute(array(
                'ui' => $this->userId,
                'd' => $this->designation,
                'cn' => $this->companyName,
                'sd' => $this->startsDate,
                'ed' => $this->endDate,
                'cl' => $this->companyLocation,
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
          $query = "SELECT * FROM  experiences WHERE user_id='$value' and deleted_at='0000-00-00 00:00:00'";
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
          $query = "SELECT * FROM  experiences WHERE id='$value'";
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
          $query = "UPDATE  experiences SET designation = :d, company_name = :cn, start_date = :sd, end_date = :ed, company_location = :cl , updated_at = :ua WHERE id='$value'";
          $stmt = $pdo->prepare($query);
          $stmt->execute(array(
            'd' => $this->updateDesignation,
            'cn' => $this->updateCompanyName,
            'sd' => $this->updateStartsDate,
            'ed' => $this->updateEndDate,
            'cl' => $this->updateCompanyLocation,
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
