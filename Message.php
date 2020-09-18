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
  <a class="active" href="Message.php">Message</a>
  <a href="PotentialMatches.php">Potential Matches</a>
  <a href="Profile.php">Profile</a>
  <a  href="Aggregatedata.php">Aggregate Data</a>
   <a style="float:right" href="SignUp.php">Sign Up</a>
 <a style="float:right" href="Logout.php">Logout</a>
  
</div>
	   <br><br> <br><br>
 <form name="messageform" method="post" action="add_message.php">
<table width="450px">
<input  type="hidden" name="from_user_id" value="<?=$_SESSION['UserId']?>" maxlength="50" size="30">
<tr>
 <td valign="top">
  <label for="To_User_IdUserId">Receiver Id*</label>
 </td>
 <td valign="top">
 
  
 <?php 
 $sid=$_SESSION['UserId'];
 $sql = "SELECT * FROM user where id!=$sid ORDER BY id ASC";
$result = $conn->query($sql);
 ?>
  <select  id="to_user_id" name="to_user_id" >
 <?php
 if ($result->num_rows > 0) {
    // output data of each row
	 while($row = $result->fetch_assoc()) {
?>
<option value="<?=$row["id"]?>"><?=$row["name"]?></option>
 <?php
 }
  } 
 ?>

</select>
 </td>
</tr>

<tr>
 
</tr>
<tr>
 <td valign="top">
  <label for="text">Message *</label>
 </td>
 <td valign="top">
  <textarea  name="message" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>


 <td colspan="2" style="text-align:center">
  <input type="submit" name="submit"  value="Submit">   

</tr>
</table>
</form>
<br><br><br>


<h3> All Inboxes</h3>

<?php

$sid=$_SESSION['UserId'];
$sql = "SELECT * FROM message where to_user_id=$sid ";
$result = $conn->query($sql);

echo "<table border='1'>
  <tr>
    
    <th>Sender Id</th>
    <th>Receiver Id</th>
  <th>Date</th>
  <th>Text</th>
</tr>";
  
  while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['from_user_id'] . "</td>";
echo "<td>" . $row['to_user_id'] . "</td>";
echo "<td>" . $row['message_date'] . "</td>";
echo "<td>" . $row['text'] . "</td>";
echo "</tr>";
}


echo "</table>";
?>

<h3> Sent</h3>

<?php
$sid=$_SESSION['UserId'];
$sql = "SELECT * FROM message where from_user_id=$sid ";
$result = $conn->query($sql);

echo "<table border='1'>
  <tr>
    
    <th>Sender Id</th>
    <th>Receiver Id</th>
  <th>Date</th>
  <th>Text</th>
</tr>";
  
  while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['from_user_id'] . "</td>";
echo "<td>" . $row['to_user_id'] . "</td>";
echo "<td>" . $row['message_date'] . "</td>";
echo "<td>" . $row['text'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>



      <br><br><br><br>
	    <div class="footer">
                   <p> <?php include "include/footer.php"; ?></p>
              </div>
   </body>
</html>

