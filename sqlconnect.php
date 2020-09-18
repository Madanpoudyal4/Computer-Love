<?php
//error_reporting(0);
include('database.php');



// Attempt insert query execution

$username= $_POST['Username'];
$email=$_POST['email'];
$psw=$_POST['psw'];


 $password = password_hash($psw, PASSWORD_DEFAULT);

 
// Close connection
$sql = "INSERT INTO user(id, name, email,password,profile, photo_url) VALUES
            ('', '$username', '$email','$password','','')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header("Location: Login.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
