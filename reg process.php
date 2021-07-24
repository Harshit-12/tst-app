<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$Name = $_POST["Name"];
$Password = $_POST["Password"];

// Create database
$sql = "Insert into reg values('$Name','$Password')";
if ($conn->query($sql) === TRUE) {
  echo "Candidate Registered  successfully";
}
  ?>
  <a href="show reg.php">Show Registered People</a>
  <?php


$conn->close();
?>