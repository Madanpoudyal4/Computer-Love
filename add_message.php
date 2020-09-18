<?php
//error_reporting(0);
include('database.php');



// Attempt insert query execution

 $from_user_id= $_POST['from_user_id']; 
 $to_user_id=$_POST['to_user_id']; 
 $message_date = date('y-m-d h:i:s', time());
 $text=$_POST['message'];


 
// Close connection
$sql = "INSERT INTO message (from_user_id, to_user_id, message_date, text) VALUES ('$from_user_id', '$to_user_id','$message_date','$text')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully";
	header("Location:message.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
