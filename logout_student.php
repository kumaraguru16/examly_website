<?php
include("config.php");
   
   session_start();
   
   if (isset($_POST['logout']))
	   
	   
   {
		 
			mysqli_query($db,"UPDATE log_user_student SET session_out = 1 WHERE log_id='".$_POST["logid_student"]."' ");
				
			
				 }
				 
	
   
   
   if(session_destroy()) {
      header("Location:index.php");
   }
?>