<?php
//error_reporting(0);
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itech3108_30338401_a1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};


?>