<html>
    <head>
  <title>Assignment 1 - Computer Love </title>
  
  <link href="style.css" rel="stylesheet">
   </head>
    <body>
	<h1 style="text-align:center">Computer Love</h1>
    <br>


<h1> This is the list of ID</h1>

<?php
//error_reporting(0);
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
$sql = "SELECT id, name, email FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>