<?php
// $servername = "http://sql55.hostinger.in";
// $username = "root";
// $password = "password";
// $dbname = "harry";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "harrypotter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>