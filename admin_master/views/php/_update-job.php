<?php
session_start();
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Job\Job;

$b = new Job();



// echo "<pre>";
// print_r($_POST);
// die();

$jobUpdateDetails['jobId']=$_POST['updateJobId'];
$jobUpdateDetails['updateDate']=$_POST['updateDate'];
$jobUpdateDetails['title']=$_POST['title'];
$jobUpdateDetails['email']=$_POST['email'];
$jobUpdateDetails['descr']=$_POST['descr'];
$jobUpdateId['jobId']=$_POST['updateJobId'];


if (isset($_POST)) {

  if ($_POST['jobCategory']=='select') {
    $jobUpdateDetails['updateJobCategory']=$_POST['updateJobCategory'];
  }
  if ($_POST['jobCategory']!='select') {
    $jobUpdateDetails['updateJobCategory']=$_POST['jobCategory'];
  }
  if (empty($_POST['dhaka']) && empty($_POST['chittagong']) && empty($_POST['rajshahi']) && empty($_POST['khulna']) && empty($_POST['rangpur']) && empty($_POST['sylhet']) && empty($_POST['barisal']) ) {
    $jobUpdateDetails['updateJobLocation']=$_POST['updateJobLocation'];
  }
  if (!empty($_POST['dhaka'])) {
    $jobUpdateDetails['dhaka']=$_POST['dhaka'];
  }
  if (!empty($_POST['chittagong'])) {
    $jobUpdateDetails['chittagong']=$_POST['chittagong'];
  }
  if (!empty($_POST['rajshahi'])) {
    $jobUpdateDetails['rajshahi']=$_POST['rajshahi'];
  }
  if (!empty($_POST['khulna'])) {
    $jobUpdateDetails['khulna']=$_POST['khulna'];
  }
  if (!empty($_POST['rangpur'])) {
    $jobUpdateDetails['rangpur']=$_POST['rangpur'];
  }
  if (!empty($_POST['sylhet'])) {
    $jobUpdateDetails['sylhet']=$_POST['sylhet'];
  }
  if (!empty($_POST['barisal'])) {
    $jobUpdateDetails['barisal']=$_POST['barisal'];
  }

  if (empty($_POST['salaryNegotiable']) && empty($_POST['salary'])) {
    if (isset($_POST['updateSalary'])) {
      $jobUpdateDetails['updateSalary']=$_POST['updateSalary'];
    }else {
      $jobUpdateDetails['updateSalary']='Negotiable';
    }
  }
  if (!empty($_POST['salaryNegotiable'])) {
      $jobUpdateDetails['updateSalary']='Negotiable';
  }
  if (!empty($_POST['salary'])) {
      $jobUpdateDetails['updateSalary']=$_POST['salary'];
  }

  // echo "<pre>";
  // print_r($jobUpdateDetails);
  // die();
  $b->setData($jobUpdateDetails);

  $insert = $b->update();

  if (empty($insert)) {
    $_SESSION['jobSuccess']="Job Update Successful";
    header("location:".$baseUrl."admin_master/views/layout/update-job.php?id=".$_POST['updateJobId']);
  }



}


?>
