<?php

$con=mysqli_connect("localhost","root", "","hospital management system");




if (isset($_POST['Submit'])) 
{
  $username=$_POST['username'];
  
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  
  $password1=$_POST['password1'];
  $password2=$_POST['password2'];
 


  

$query= sprintf("INSERT INTO register(username, email,phone,password1,password2) VALUES ('%s', '%s', '%s', '%s','%s')", $username, $email,$phone,$password1,$password2);


   $result=mysqli_query($con,$query);

   if($result)
   {
    echo "<script> alert (' Registered') </script>";
  echo "<script> window.open('first.php', '_self') </script>";
   }

}



//login code

if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password1=$_POST['password1'];
  $query= "select username,password1 from register where username='$username' and password1= '$password1' ";

  $result=mysqli_query($con,$query);

  if (mysqli_num_rows($result)==1) 
  {
    header("Location:index.php");
  }
  else
  {
    echo "<script> alert ('error login') </script>";
    echo "<script> window.open('first.php', '_self') </script>";
  }
}


?>