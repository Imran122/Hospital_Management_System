<?php

$con=mysqli_connect("localhost","root", "","hospital management system");




if (isset($_POST['pat_submit'])) 
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];

  


$query= sprintf("INSERT INTO staff (fname,lname,email,contact,address) VALUES ('%s','%s', '%s', '%s', '%s')", $fname,$lname,$email,$contact,$address);


   $result=mysqli_query($con,$query);

   if($result)
   {
    echo "<script> alert ('Appoinment Registered') </script>";
  echo "<script> window.open('staff.php', '_self') </script>";
   }

}



?>