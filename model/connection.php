<?php

$address = "localhost:3306";
$username = "root";
$password = "";
$database = "bdlibreria";

$conn = new mysqli($address, $username, $password, $database);
$conn->set_charset("utf8");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>