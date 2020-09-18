
<?php
session_start();
//include('database.php')
// remove all session variables
session_unset();

// destroy the session
session_destroy();


//exit();
  header("location:login.php");
?>