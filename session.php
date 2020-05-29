<?php
   session_start();
   
   include('config.php');
   if (isset($_SESSION['login_user'])){
      $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT * FROM user WHERE email= '$user_check' ") or die("Error: ".mysqli_error($db));
   
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $_SESSION['type1'] = 1;
   $login_session = $row['email'];
   $usename = $row['username'];
   $userid = $row['id'];

   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
   }
   if (isset($_SESSION['login_user_student'])){
      $user_check_student = $_SESSION['login_user_student'];
   $_SESSION['type2'] = 2;
   $ses_sql = mysqli_query($db,"SELECT * FROM student WHERE email= '$user_check_student'") or die("Error: ".mysqli_error($db));
   
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session_student = $row['email'];
   $usename_student = $row['username'];
   $userid_student = $row['id'];
   if(!isset($_SESSION['login_user_student'])){
      header("location:index.php");
      die();
   }
   }
?>