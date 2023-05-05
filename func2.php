<?php
session_start();
$con=mysqli_connect("localhost","root","","hmsdd");
if(isset($_POST['login_submit'])){
	$username=$_POST['Email'];
	$password=$_POST['password'];
	$query="select * from doctor where Email='$username' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['username']=$username;
		header("Location:doctor/doctor-panel.php");
	}
	else
		echo "<script>alert('Password or Email is incorrect.')</script>";
		echo"<script>window.open('doctorlogin.php','_self')</script>";

        
}
?>
