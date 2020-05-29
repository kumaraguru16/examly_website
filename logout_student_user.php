<?php
include("config.php");
   
   session_start();
   
   
				 
	if (isset($_POST['logout_user']))
	   
	   
   {
		 
			mysqli_query($db,"UPDATE log_user_student SET session_out = 1 WHERE log_id='".$_POST["logid_student"]."' ");
				
			 mysqli_query($db,"UPDATE student SET session_in = 1 WHERE id='".$_POST["user_id_student"]."' ");
				 }
   
   
   if(session_destroy()) {
      header("Location:users.php");
   }
?>