


<?php
$con=mysqli_connect("localhost","root", "","hospital management system");
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query= "select * from doctorlogin where username='$username' and password= '$password' ";

	$result=mysqli_query($con,$query);

	if (mysqli_num_rows($result)==1) 
	{
		header("Location:doctor_acc.php");
	}
	else
	{
		echo "<script> alert ('error login') </script>";
		echo "<script> window.open('doctor.php', '_self') </script>";
	}
}

//patient details part here





?>