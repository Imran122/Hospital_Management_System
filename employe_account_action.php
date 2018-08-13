<?php

$con=mysqli_connect("localhost","root", "","hospital management system");




if (isset($_POST['pat_submit'])) 
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
  $contact=$_POST['contact'];
  $amount=$_POST['amount'];
	$pay=$_POST['pay'];
	$docapp=$_POST['docapp'];

  

$query= sprintf("INSERT INTO doctorapp (fname, lname, email, contact,amount,pay,docapp) VALUES ('%s','%s', '%s', '%s', '%s', '%s','%s')", $fname, $lname, $email, $contact,$amount,$pay,$docapp);


   $result=mysqli_query($con,$query);

   if($result)
   {
   	echo "<script> alert ('Appoinment Registered') </script>";
  echo "<script> window.open('employee_account.php', '_self') </script>";
   }

}



?>