<?php 
include 'db.php';
$admissionNo = $_POST['admissionNo'];
  $surname = $_POST['surname'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $dob = $_POST['dob'];
  $pob = $_POST['pob'];
  $gender = $_POST['gender'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  
  
  $sqlUpdateStudent = $conn->query(" update studentusers set admissionNo='$admissionNo', surname='$surname', firstName='$firstName', lastName='$lastName', dob='$dob', pob='$pob', gender='$gender', nationality='$country', state='$state', phone='$phone', address='$address', password ='$password' where admissionNo= '$admissionNo' ") or die(mysqli_error($conn));

  header('location:myProfile.php?s');
  
  
  
  ?>