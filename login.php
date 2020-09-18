 <!DOCTYPE html>
 <html>
   <head>
         <title>Assignment 1 - Computer Love </title>
		 
		 <style> 
body {
  background-image: url("background.png");
 
}
</style>
		 <link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
      <body>
         <h1 style="text-align:center">Computer Love</h1>
		 
		   <br><br>
 <div class="container2">
		 <form action="logincheck.php" method="post">
           <h2 >Log In</h2>
		   
		  
           <p>Please insert your details here.</p>
		    
           <hr>
           <label for="username"><b>Username</b></label>
		   
		      <br><br>
           <input type="text" placeholder="Enter Username" name="Username" required>
                 <br><br>
           
           <label for="psw"><b>Password</b></label>
		          <br><br>
           <input type="password" placeholder="Password" name="password" required>
		  
		  <?php 
			include('database.php');
			if( isset( $_SESSION['msg'] ) ){ ?>
		   <?php echo $_SESSION['msg'];  ?>
		   <?php  unset( $_SESSION['msg'] );} ?>
	              <br><br>
	       
           <label>
           <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
           </label>
             <br>
			 
			 
			
			<div class="loginbtn">
               
               <button type="submit" class="loginbtn">Log In</button>
			      </div>
				  <br><br><br><br>
				   <a href="signup.php" target="_blank">Create a new account</a>
				  				  <br>
					</form>
					</html>