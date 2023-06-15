<?php
$servername = "54.39.104.158";
$username = "root";
$password = "izhtech@123";
$dbname = "vstinnovations_izhtech";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>