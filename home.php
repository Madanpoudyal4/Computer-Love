<!DOCTYPE html>
<?php 

include('database.php');
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE ) {
   // header("location: login.php");
} else {
  header("location: login.php");
};
?>

<html>
   <head>
         <title>Assignment 1 - Computer Love </title>
		 <link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
      <body>
		   <br><br>
		 <div class="topnav">
		 <h4> <a style="color:linear-gradient(120deg, #84fab0 0%, #8fd3f4 100% ">Computer Love</a> </h4>
		  <br>
  <a class="active" href="Home.php">Home</a>
 <a href="Message.php">Message</a>
  <a href="PotentialMatches.php">Potential Matches</a>
   <a href="Profile.php">Profile</a>
   <a  href="Aggregatedata.php">Aggregate Data</a>
  <a style="float:right" href="SignUp.php">Sign Up</a>
 <a style="float:right" href="Logout.php">Logout</a>
  
    </div>
	   <br><br>
	   <h3> Welcome <?php echo $_SESSION['userName'];?>!<h3>
	  
	
		<img src="image/welcome.png" alt="Nature" class="responsive" >
		<br><br><br><br>
	 
              <div class="footer">
                   <p> <?php include "include/footer.php"; ?></p>
              </div>
	 
	 
	   
    </div>
	</body>
</html>
	   