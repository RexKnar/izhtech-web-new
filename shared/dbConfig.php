<?php
$servername = "localhost";
$username = "root";
$password = "izhtech@123";
$dbname = "izhtech";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>