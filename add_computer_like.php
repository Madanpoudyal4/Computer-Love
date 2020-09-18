<?php
//error_reporting(0);
include('database.php');



// Attempt insert query execution

 $user_id= $_POST['user_id']; 
 
$checkboxcount = count($_POST['computer_id']);
if($checkboxcount <2)
{
    print_r("you must select at least 2");
	 $_SESSION['msg'] ='<h3><span style="color:red; border: 1px solid red;">You must select at least 2 items</span></h3>';
	
	 header("location: profile.php");
	die();
}

$checkBox = $_POST['computer_id'];


if(isset($_POST['submit']))
{
    for ($i=0; $i<sizeof($checkBox); $i++)
		
        {
			
            $query="INSERT INTO likes (user_id,computer_id) VALUES ( '$user_id','" . $checkBox[$i] . "')";     

            mysqli_query($conn,$query) or die (mysqli_error() ) ;
        }
    echo "Complete";

	 $_SESSION['msg'] ='<h3><span style="color:red; border: 1px solid red;">You successfully choose the items</span></h3>';
	 header("location: profile.php");

}

mysqli_close($conn);









?>


