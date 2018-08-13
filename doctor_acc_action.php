<?php

$con=mysqli_connect("localhost","root", "","hospital management system");




if (isset($_POST['pat_sub'])) 
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $contatct=$_POST['contatct'];

  $press=$_POST['press'];
  $test=$_POST['test'];
 


  

$query= sprintf("INSERT INTO tests(fname, lname, email, contatct,press,test) VALUES ('%s', '%s', '%s', '%s', '%s','%s')", $fname, $lname, $email, $contatct,$press,$test);


   $result=mysqli_query($con,$query);

   if($result)
   {
    echo "<script> alert ('Test Registered') </script>";
  echo "<script> window.open('doctor_acc.php', '_self') </script>";
   }

}



?>