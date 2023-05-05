<?php
session_start();
$con=mysqli_connect("localhost","root","","hmsdd");
if(isset($_POST['login_submit'])){
	$username=$_POST['Email'];
	$password=$_POST['password'];
	$query="select * from admin where Email='$username' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['username']=$username;
		
		$q="Insert INTO adminlog (Email,login,logout) VALUES ('$username',Now(),Now())";
		header("Location:admin-panel.php");
	}
	else
		echo "<script>alert('Password or Email is incorrect.')</script>";
		echo"<script>window.open('Admin-login.php','_self')</script>";

        
}
?>
