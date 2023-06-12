<?php 
session_start();
include('dbConfig.php');

$sqlQuery=" INSERT INTO contacts (name, email,  message) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
print_r($sqlQuery);

if (mysqli_query($conn, $sqlQuery)) {
    
    header('location:../contact.php#contact?token=success');
 } else {
    print_r($sqlQuery);
    print_r(mysqli_error($conn));
    // echo "<script>alert('Please Upload a image with aspect ratio(260x 160)'); history.back();</script>";
 }
  
 
?>