<?php
namespace App\Job;
use PDO;
include '../../db/dbconnection.php';

class Job
{
  private $jobId='';
  private $jobTitle='';
  private $jobCategory='';
  private $jobEmail='';
  private $jobEmployer='';
  private $jobSalary='';
  private $jobLocation='';
  private $jobDetails='';

  private $updateJobId='';
  private $updateJobtitle='';
  private $updateJobEmail='';
  private $updateJobDetails='';
  private $updateJobCategory='';
  private $updateJobSalary='';
  private $updateJobLocation='';

  private $createAt='';
  private $updateAt='';


public function setData($value=''){
  if (array_key_exists("title",$value)) {
    $this->jobTitle=$value['title'];
  }
  if (array_key_exists("jobCategory",$value)) {
    $this->jobCategory=$value['jobCategory'];
  }
  if (array_key_exists("email",$value)) {
    $this->jobEmail=$value['email'];
  }
  if (array_key_exists("emlpoyers",$value)) {
    $this->jobEmployer=$value['emlpoyers'];
  }
  if (array_key_exists("dhaka",$value)) {
    $this->jobLocation=$value['dhaka'];
  }
  if (array_key_exists("chittagong",$value)) {
    $this->jobLocation=$this->jobLocation.' '.$value['chittagong'];
  }
  if (array_key_exists("rajshahi",$value)) {
    $this->jobLocation=$this->jobLocation.' '.$value['rajshahi'];
  }
  if (array_key_exists("khulna",$value)) {
    $this->jobLocation=$this->jobLocation.' '.$value['khulna'];
  }
  if (array_key_exists("rangpur",$value)) {
    $this->jobLocation=$this->jobLocation.' '.$value['rangpur'];
  }
  if (array_key_exists("sylhet",$value)) {
    $this->jobLocation=$this->jobLocation.' '.$value['sylhet'];
  }
  if (array_key_exists("barisal",$value)) {
    $this->jobLocation=$this->jobLocation.' '.$value['barisal'];
  }

  if (empty($value['salaryNegotiable'])) {
    $this->jobSalary=$value['salary'];
  }
  if (!empty($value['salaryNegotiable'])) {
    $this->jobSalary="Negotiable";
  }
  if (array_key_exists("descr",$value)) {
    $this->jobDetails=$value['descr'];
  }
  if (array_key_exists("descr",$value)) {
    $this->jobDetails=$value['descr'];
  }
  if (array_key_exists("postDate",$value)) {
    $this->createAt=$value['postDate'];
  }

// update
if (array_key_exists("jobId",$value)) {
  $this->updateJobId=$value['jobId'];
}
if (array_key_exists("title",$value)) {
  $this->updateJobtitle=$value['title'];
}
if (array_key_exists("email",$value)) {
  $this->updateJobEmail=$value['email'];
}
if (array_key_exists("descr",$value)) {
  $this->updateJobDetails=$value['descr'];
}
if (array_key_exists("updateJobCategory",$value)) {
  $this->updateJobCategory=$value['updateJobCategory'];
}
if (array_key_exists("updateSalary",$value)) {
  $this->updateJobSalary=$value['updateSalary'];
}
if (array_key_exists("updateDate",$value)) {
  $this->updateAt=$value['updateDate'];
}
if (array_key_exists("updateJobLocation",$value)) {
  $this->updateJobLocation=$value['updateJobLocation'];
}
if (array_key_exists("dhaka",$value)) {
  $this->updateJobLocation=$value['dhaka'];
}
if (array_key_exists("chittagong",$value)) {
  $this->updateJobLocation=$this->updateJobLocation.' '.$value['chittagong'];
}
if (array_key_exists("rajshahi",$value)) {
  $this->updateJobLocation=$this->updateJobLocation.' '.$value['rajshahi'];
}
if (array_key_exists("khulna",$value)) {
  $this->updateJobLocation=$this->updateJobLocation.' '.$value['khulna'];
}
if (array_key_exists("rangpur",$value)) {
  $this->updateJobLocation=$this->updateJobLocation.' '.$value['rangpur'];
}
if (array_key_exists("sylhet",$value)) {
  $this->updateJobLocation=$this->updateJobLocation.' '.$value['sylhet'];
}
if (array_key_exists("barisal",$value)) {
  $this->updateJobLocation=$this->updateJobLocation.' '.$value['barisal'];
}
if (array_key_exists("updateDate",$value)) {
  $this->updateAt=$value['updateDate'];
}

  return $this;
}

public function update()
{
  try{
      $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
      $query = "UPDATE  jobs SET job_category = :jc,job_title = :jt,job_description = :jd,salary = :s,job_location = :jl,email = :e,updated_at = :ua WHERE job_id='$this->updateJobId'";
      $stmt = $pdo->prepare($query);
      $stmt->execute(array(
        'jc' => $this->updateJobCategory,
        'jt' => $this->updateJobtitle,
        'jd' => $this->updateJobDetails,
        's' => $this->updateJobSalary,
        'jl' => $this->updateJobLocation,
        'e' => $this->updateJobEmail,
        'ua' => $this->updateAt

      ));
      $data = $stmt->fetchAll();
      return $data;

  }catch (PDOException $e){
      echo 'Error: '. $e->getMessage();
  }
}

  public function index($value='')
  {

    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "INSERT INTO jobs (job_id,employer_id,job_category,job_title,job_description,salary,job_location,email,job_status,created_at) Values(:ji,:ei,:jc,:jt,:jd,:s,:jl,:e,:js,:ca)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          'ji' => 'job'.$value,
          'ei' => $this->jobEmployer,
          'jc' => $this->jobCategory,
          'jt' => $this->jobTitle,
          'jd' => $this->jobDetails,
          's' => $this->jobSalary,
          'jl' => $this->jobLocation,
          'e' => $this->jobEmail,
          'js' => 0,
          'ca' => $this->createAt

        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function find_employer($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM employers WHERE user_name='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0]['user_id'];

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

public function create_job_id($value='')
{
  try{
      $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
      $query = "SELECT MAX(id) from jobs";
      $stmt = $pdo->prepare($query);
      $stmt->execute();
      $data = $stmt->fetchAll();
      return $data[0][0];

  }catch (PDOException $e){
      echo 'Error: '. $e->getMessage();
  }
}

  public function find_job_categories($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM  job_categories WHERE deleted_at='0000-00-00 00:00:00'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

public function find_job_list($value='')
{
  try{
      $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
      $query = "SELECT * FROM  jobs WHERE employer_id='$value' AND deleted_at='0000-00-00 00:00:00'";
      $stmt = $pdo->prepare($query);
      $stmt->execute();
      $data = $stmt->fetchAll();
      return $data;

  }catch (PDOException $e){
      echo 'Error: '. $e->getMessage();
  }
}

public function find_single_job($value='')
{
  try{
      $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
      $query = "SELECT * FROM  jobs WHERE job_id='$value' AND deleted_at='0000-00-00 00:00:00'";
      $stmt = $pdo->prepare($query);
      $stmt->execute();
      $data = $stmt->fetchAll();
      return $data[0];

  }catch (PDOException $e){
      echo 'Error: '. $e->getMessage();
  }
}

public function find_single_category($value='')
{
  try{
      $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
      $query = "SELECT * FROM  job_categories WHERE category_id='$value' AND deleted_at='0000-00-00 00:00:00'";
      $stmt = $pdo->prepare($query);
      $stmt->execute();
      $data = $stmt->fetchAll();
      return $data[0];

  }catch (PDOException $e){
      echo 'Error: '. $e->getMessage();
  }
}

public function delete_job($value='',$date_and_time)
{


  try{
      $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
      $query = "UPDATE  jobs SET deleted_at = :da WHERE job_id='$value'";
      $stmt = $pdo->prepare($query);
      $stmt->execute(array(

        'da' =>$date_and_time

      ));
      $data = $stmt->fetchAll();
      return $data;

  }catch (PDOException $e){
      echo 'Error: '. $e->getMessage();
  }
}


}



 ?>
