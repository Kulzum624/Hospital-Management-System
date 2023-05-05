<?php
session_start();
$con=mysqli_connect("localhost","root","","hmsdd");
if(isset($_POST['edit'])){
	$id=$_SESSION['username'];
	$age=$_POST['AGE'];
	$password=$_POST['password'];
	$add=$_POST['Address'];
	$c=$_POST['City'];
	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
	$select= "select * from patient where Email ='$id'";
    $sql = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['Email'];
	
    
    if($res === $id)
    {
		$update="update patient set password='$password', AGE='$age',First_Name='$fname',Last_Name='$lname' ,password='$password',City='$c',Address='$add' where Email='$id'";
       $sql2=mysqli_query($con,$update);


	if($sql2)
       { 
           /*Successful*/
           header('location:pateint-panel.php');
		   echo "<script>alert('success')</script>";
       }
	   else
       {
           /*sorry your profile is not update*/
		   echo "<script>alert('sorry your profile is not updated')</script>";
           header('location:edit-profile.php');
       }
	}   
	   else
    {
		echo "<script>alert('sorry your id is not match')</script>";
        /*sorry your id is not match*/
        header('location:edit-profile.php');
    }


	
        

}
?>

