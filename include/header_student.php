<?php 
include('session.php');
if (isset($_SESSION['type2'])){
 ?>
<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Examly Website</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	
	 <!-- FooTable -->
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
	
    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
     <link href="css/plugins/switchery/switchery.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
	
	<!-- Sweet Alert -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
	
	<link href="css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">


    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/local.css" rel="stylesheet">
	
	
	

</head>

<body>
    <div id="wrapper">
	<div id="myDIV">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu" >
                <li class="nav-header" class="active">
                    <div class="dropdown profile-element">
					<h3 style="font-size: 65px; color: #fff;"><i class="fa fa-user-circle" aria-hidden="true"></i></h3>
                        <!--<img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>-->
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><?php echo $usename_student ?></span>
                            
                        </a>
                        
                    </div>
                    
                </li>
                <li >
                    <a href="student_dashboard.php"><i class="fa fa-th-large"></i> <span class="nav-label">DashBoard</span></span></a>
                </li>
				<li >
                    <a href="personal-details.php"><i class="fa fa-book"></i> <span class="nav-label">Personal Details</span></span></a>
				</li>
                
            </ul>

        </div>
    </nav>
	</div>
        <div id="page-wrapper" class="gray-bg">
        <div class="row">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 20px">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>
            <ul class="nav navbar-top-links navbar-right">

                <li>
                    <span class="m-r-sm text-muted welcome-message">Hi! <?php echo $usename_student ?>, Welcome to Examly Website</span>
                </li>
                <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:50px; font-size:6px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
                <li>
				<form method="POST" action="logout_student.php">
				<?php
				$q = mysqli_query($db,"SELECT * FROM student JOIN log_user_student WHERE id = user_id AND id = '$userid_student' AND session_out = 0 ");
											   if (mysqli_num_rows($q) > 0) {
												   // output data of each row
												   while($row = mysqli_fetch_assoc($q)) {
													   $userid_student = $row["user_id"];
													   $logid_student = $row["log_id"];
													   ?>
				
				
				<input type="hidden" name="logid_student" value="<?php echo $logid_student ?>" ><input type="hidden" name="user_id_student" value="<?php echo $userid_student ?>" >
				<?php }} ?>
                    <button class="btn btn-success" type="submit" name="logout">
                        <i class="fa fa-sign-out" ></i> Log out
                    </button>
			    </form>
											   
                </li>
                
            </ul>

        </nav>
        </div>
    <?php }else{
        header("location:404.php");
    } ?>

    
		
