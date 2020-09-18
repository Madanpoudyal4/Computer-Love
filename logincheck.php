<?php
//error_reporting(0);
include('database.php');


$result = mysqli_query($conn,"SELECT * FROM user WHERE name='" . $_POST["Username"]."'");
$row  = mysqli_fetch_array($result);
	
	if(is_array($row)) {
		
      if(password_verify($_POST["password"], $row['password'])) {				
	$userName = $row['name'];
		  //print_r($username);
    $userid = $row['id'];
	$userEmail = $row['email'];
    $_SESSION['loggedin']=TRUE; 
	
    $_SESSION['userName'] = $userName;
	$_SESSION['userEmail'] = $userEmail;
    $_SESSION['UserId'] = $userid ; // <-this variable should now exist
	header("location: home.php");

	   } else {
			 $_SESSION['msg'] ='<tr><span style="color:red; border: 1px solid red;">Email or password wrong</span></tr>';
			 header("location: login.php");
		}
	}


$conn->close();
?>

