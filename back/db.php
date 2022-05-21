<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "jeevan";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  echo "<script> alert('Database problem contact admin...'); </script>";
  die("Connection failed: " . $conn->connect_error);
}

?>