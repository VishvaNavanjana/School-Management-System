<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$db = "schooldatabase";

$conn = new mysqli($serverName, $userName, $password,$db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 ?>
