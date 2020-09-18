<!DOCTYPE html>
<?php
// Start the session
session_start();
?>

 <!DOCTYPE html>
<html>
   <head>
         <title>Assignment 1 - Computer Love </title>
		 
		 <link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
      <body>
         <h1 style="text-align:center">Computer Love</h1>
		 
		   <br><br>

		
           <h2>Sign Up</h2>
           <p>Please create your account here.</p>
           <hr>
		   <form action="sqlconnect.php" method="post">
		   
           <label for="username"><b>Username</b></label>
		      <br><br>
           <input type="text" placeholder="Enter Username" name="Username" required>
                 <br><br>
           <label for="email"><b>Email</b></label>
		   <br><br>
           <input type="Email" placeholder="Enter Email" name="email" required>
                 <br><br>
           <label for="psw"><b>Password</b></label>
		          <br><br>
          
                   <input type="password" placeholder="Enter password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required>
                   
				  <br>

                    
         <div= "btn">
               <button type="submit" class="signupbtn">Sign Up</button>

			   </div> 
           
			  <br><br><br><br>
                    <a href="login.php" target="_blank">Already have account?</a>
					<br><br><br><br>
					
							   	
			</form>
							  
					
	
      </body>

 </html>