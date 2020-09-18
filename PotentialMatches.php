<!DOCTYPE html>

<?php 

include('database.php');
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE ) {
   // header("location: login.php");
} else {
  header("location: login.php");
};
$sid=$_SESSION['UserId'];
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
                <a class="active" href="#PotentialMatches.php">Potential Matches</a>
                <a href="Profile.php">Profile</a>
                <a  href="Aggregatedata.php">Aggregate Data</a>
                <a style="float:right" href="SignUp.php">Sign Up</a>
                <a style="float:right" href="Logout.php">Logout</a>
            </div>
  	   <br><br>


            <h4>Common Users Interest</h4>


<?php
$username=$_SESSION['userName'];
$userid=$_SESSION['UserId'];
        $query=      "SELECT user.name,user.profile,GROUP_CONCAT(computer.title) AS interests,Count(computer.title) as ncomputer from user join likes on user.id
        = likes.user_id join computer on computer.id = likes.computer_id where not user.name= '$username' and computer.title in
        (Select computer.title from computer join likes on computer.id = likes.computer_id join user on user.id = likes.user_id
        where user.name = '$username') and user.id NOT IN (SELECT to_user_id from Message WHERE from_user_id= '$userid' ) GROUP by user.name order by (ncomputer) DESC";
$result = mysqli_query($conn, $query);
?>
  <table><table border='1'cellpadding="15" style="margin-left:50px;">
   <th>Name </th>
    <th>Profile </th>
  <th>Interests</th>
   <th>Overlap Interests Number</th>
   <th>Message</th>
   
  
</tr>
  <?php while ($row_com = mysqli_fetch_array($result))
{
	?>
	
  <tr><td><?php echo $row_com['name'];?></td>
  
  <td><?php echo $row_com['profile'];?></td>
  <td><?php echo $row_com['interests'];?></td>
  <td><?php echo $row_com['ncomputer'];?></td>

 <td> <a href="message.php" target="_blank">Message</a></td>
 </tr>

  <?php
}	
		?>
		  </table>
               
               
       <br><br><br><br>
      
 	                 <div class="footer">
                   <p> <?php include "include/footer.php"; ?></p>
              </div>
        </body>
</html>
