<?php
include("config.php");
   
   session_start();
   
   if (isset($_POST['logout']))
	   
	   
   {
		 
			mysqli_query($db,"UPDATE log_user SET session_out = 1 WHERE log_id='".$_POST["logid"]."' ");
				
			
				 }
				 
	
   
   
   if(session_destroy()) {
      header("Location:index.php");
   }
?>