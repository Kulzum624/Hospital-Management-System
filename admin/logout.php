<?php
   include('session.php');
   
   if(session_destroy()) {
    $con=mysqli_connect("localhost","root","","hmsdd");
    $id=$_SESSION['username'];
    $update="update adminlog set logout=NOW() where Email='$id'";
    $sql2=mysqli_query($con,$update);
      header("Location: ../index.html");
   }
?>