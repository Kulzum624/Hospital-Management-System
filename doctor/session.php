<?php
   session_start();
   $con=mysqli_connect("localhost","root","","hmsdd");
   
   
   $user_check = $_SESSION['username'];
   
   $ses_sql = mysqli_query($con,"select Email from doctor where Email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Email'];
   
   if(!isset($_SESSION['username'])){
      header("location:../index.html");
      die();
   }
?>