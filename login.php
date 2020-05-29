<?php
	include("config.php");
   session_start();

  
   if (isset($_POST['admin'])){
    if($_SERVER["REQUEST_METHOD"] == "POST")
     {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
    $sessionin = mysqli_real_escape_string($db,$_POST['session_in']);
    $mypassword = md5($mypassword);
      
    
   
    
      $sql = "SELECT id FROM user WHERE email = '$myusername' and password = '$mypassword' AND session_in = '$sessionin' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
    $userid = $row['id'];
      
     
    
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      
    
    $count = mysqli_num_rows($result);
    
    
    
    if($count == 1) {
         
      $_SESSION["login_user"] = $myusername;
     $_SESSION["ses_in"] = $sessionin;
     
      mysqli_query($db,"INSERT INTO log_user ( user_id) VALUES('$userid')");
      
      
      
         
         header("location:dashboard.php ");
      }else {
      $error = "Your Login Name or Password is invalid or Logout from other browser";
      $_SESSION["error"] = $error;
          
   
    
      }
   }
   }

   if (isset($_POST['user'])){
    if($_SERVER["REQUEST_METHOD"] == "POST")
     {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
    $sessionin = mysqli_real_escape_string($db,$_POST['session_in']);
    $mypassword = md5($mypassword);
      
    
   
    
      $sql = "SELECT id FROM student WHERE email = '$myusername' and password = '$mypassword' AND session_in = '$sessionin' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
    $userid = $row['id'];
      
     
    
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      
    
    $count = mysqli_num_rows($result);
    
    
    
    if($count == 1) {
         
      $_SESSION["login_user_student"] = $myusername;
     $_SESSION["ses_in_student"] = $sessionin;
     
      mysqli_query($db,"INSERT INTO log_user_student ( user_id) VALUES('$userid')");

         header("location:student_dashboard.php ");
      }else {
      $error = "Your Login Name or Password is invalid or Logout from other browser";
      $_SESSION["error"] = $error;
      }
   }
   }
   
      
   ?>


<html>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
    

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                

            </div>
            <h3>Welcome to Examly website</h3>
            
			
			
            
            <form class="m-t" role="form" Method="POST" action="">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email"  required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password"  required="">
                </div>
				<div class="form-group">
                    <input type="hidden" class="form-control" name="session_in" value="1"   required="">
                </div>
                
                </div>
                
                <button type="submit" class="btn btn-primary block full-width m-b" name="admin">Admin Login</button>
                <button type="submit" class="btn btn-primary block full-width m-b" name="user">User Login</button>
				
				<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
			 </form>
			  
            
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
	

</body>

</html>

<?php
    unset($_SESSION["error"]);
?>