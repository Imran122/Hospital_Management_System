<?php 
$con=mysqli_connect("localhost","root", "","hospital management system");

if(isset($_POST['pat_submit']))
          {

            $fname= $_POST['fname'];
            $amount= $_POST['amount'];
            $pay= $_POST['pay'];
        
            
            $query= "update doctorapp set amount='$amount', pay='$pay' where fname='$fname' ";
             $result=mysqli_query($con,$query);

          if($result)
           {
            echo "<script> alert ('Updated Data') </script>";
          echo "<script> window.open('payment.php', '_self') </script>";
           }
              


          }



?>