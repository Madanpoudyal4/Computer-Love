<?php
//error_reporting(0);
include('database.php');



// Attempt insert query execution

 $sid= $_POST['sid']; 
 $profile=$_POST['profile']; 
 $photo_url=$_POST['photo_url'];


 
// Close connection
$sql = "UPDATE user SET profile='$profile', photo_url='$photo_url'  WHERE id=' $sid'";

if ($conn->query($sql) === TRUE) {
    echo "update successfully";
	 header("Location: profile.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
