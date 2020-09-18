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
  <a href="Home.php">Home</a>
  <a href="Message.php">Message</a>
  <a href="PotentialMatches.php">Potential Matches</a>
  <a href="Profile.php">Profile</a>
  <a class="active" href="Aggregatedata.php">Aggregate Data</a>
   <a style="float:right" href="SignUp.php">Sign Up</a>
 <a style="float:right" href="Logout.php">Logout</a>
  
</div>
  <br><br><br>
  
  
   <h3> Most Popular day</h3>
	

<?php
$query= "Select DAYNAME(message_date)as weekDay, count(*)
from message
GROUP BY DAYNAME(message_date)
 ORDER BY count(*) DESC limit 1";

$results= mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($results);

	   echo "The most popular day to send message is ".$row['weekDay'];
?> 


<h3> The total number of messages sent on the site</h3>
	<?php
$link = "SELECT * FROM  message";
$res = mysqli_query($conn, $link);
$total = mysqli_num_rows($res);
echo '<p>'.$total.'</p>';
?>

  
<h3> List of top three products</h3>
	
<?php


$query= "select c.title , count(*) as 'NUMBER of likes'
from computer as c, user as u, likes
where computer_id = c.id and user_id = u.id
group by c.title
order by count(*)
DESC limit 3";

$results= mysqli_query($conn,$query);

?>  
<table border =1 cellspacing = 5 cellpadding=5>
<tr><td>Computer name</td><td>Number of likes</td></tr>

<?php
     while($row = mysqli_fetch_assoc($results)) {

	   echo "<tr><td>".$row['title']."</td><td>".$row['NUMBER of likes']."</td></tr>";
	   }
 
?>




	     <div class="footer">
                   <p> <?php include "include/footer.php"; ?></p>
              </div>

</body>
</html>