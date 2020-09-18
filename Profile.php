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
  <a href="PotentialMatches.php">Potential Matches</a>
   <a class="active" href="Profile.php">Profile</a>
   <a  href="Aggregatedata.php">Aggregate Data</a>
  <a style="float:right" href="SignUp.php">Sign Up</a>
 <a style="float:right" href="Logout.php">Logout</a>
  
</div>
	   <br><br>   <br>

	
	<div style="width: 100%;">
        <div style="width: 50%; height: 100px; float: left; ">
	<h3><u>Here is your profile</u></h3> 

<?php
$sql   = "SELECT * FROM user where id=$sid";

$result  =   mysqli_query($conn,$sql);
$row  =  mysqli_fetch_array($result);


?>
	
<table border="1">
<tr>
<td>Name:</td><td><?=$row['name'];?></td>
</tr>

<tr>
<td>Profile:</td><td><?=$row['profile'];?></td>
</tr>


<tr>
<td>Photo url:</td><td><?=$row['photo_url'];?></td>
</tr>

<tr>
<td colspan="2">
<img class="spotlight"  src="<?=$row['photo_url'];?>" style="width: 200px; height: 200px;">
</td>
</tr>
</table>	
	<br>
	
<h3><u>Edit your profile here</u></h3>
	<br>
	<form action="update.php" method="post">
	<input type="hidden" value="<?=$sid;?>" name="sid" />
Profile:<input type="text" value="<?=$row['profile'];?>" name="profile" /><br><br>
Photo url:<input type="text" value="<?=$row['photo_url'];?>"  name="photo_url" /><br><br>

<input type="submit" value="Save"/>
</form>
<br><br><br><br><br><br>
</div>
	
	   <br>
	<div style="margin-left: 50%; height: 100px;"> 

<form method="POST" action="add_computer_like.php">
<label for="profile"><h3><u>Please choose your favourite computer(s):</u></h3></label>

<input  type="hidden" name="user_id" value="<?=$_SESSION['UserId']?>" maxlength="50" size="30">
<?php
$query="SELECT * FROM computer ";
$res1 = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($res1))
{
echo '<input type="checkbox" name="computer_id[]" value="'.$row['id'].'">'.$row['title'].'<br/>';
}
?>
<br>
<input type="submit" name="submit" value="Submit">
</form>
<?php ?>
</article>
<br>
<?php 
		
			if( isset( $_SESSION['msg'] ) ){ ?>
		   <?php echo $_SESSION['msg'];  ?>
		   <?php  unset( $_SESSION['msg'] );} ?>
 </div>
    </div>

	  <div class="footer">
                   <p> <?php include "include/footer.php"; ?></p>
              </div>
 </body>
</html>


