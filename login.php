<?php
$con=mysqli_connect("localhost","root", "","hospital management system");
if(isset($_POST['login_submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query= "select * from employe where username='$username' and password= '$password' ";

	$result=mysqli_query($con,$query);

	if (mysqli_num_rows($result)==1) 
	{
		header("Location:employee_account.php");
	}
	else
	{
		echo "<script> alert ('error login') </script>";
		echo "<script> window.open('employee.php', '_self') </script>";
	}
}

?>