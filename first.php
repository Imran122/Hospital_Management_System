
<?php
include('register.php'); 
?>




<!DOCTYPE html>
<html>
<head>
	
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SignUp Or LOgin</title>

     <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
     <link href="css/success.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">
    
 
    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

 <style type="text/css">
   
   *{
    margin: 0;
    padding: 0;
   }
   html{
    height: 100%;

   }
   .header{
    background-image: url(img/kk.jpg);
    -webkit-background-size:cover;
    background-size: cover;
    background-position: center center;
    height: 100vh;
    width: 100%;
   }


.form-container{
  margin-top: -70px;
  margin-left: 30px;
}


.modal{
    overflow-y: auto;
}

 </style>

    
    
</head>
<body>
    
    <div class="header">

    <div id="particles-js">
      
       


      
   <!-- registraion  sign up-->

  
<div class="modal fade" id="benson">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="close" data-dismiss="modal"></div>
        <h3>Sign Up</h3>
        
      </div>
      <div class="modal-body">
                
<form method="POST" class="form-container" action="register.php">
          <h1 style="color: #757575 "></h1>
          <div class="form-group">
            <label for="exampleInputUserName">User Name</label>
            <input type="text" class="form-control" name="username" placeholder="User Name">

          </div>

          <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="text" class="form-control" name="email" placeholder="EMail">

          </div>
            <div class="form-group">
            <label for="exampleInputUserName">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone">

          </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password1"  placeholder="Password">
          </div>

            <div class="form-group">
            <label for="exampleInputPassword2">Confirm Password</label>
            <input type="password" class="form-control" name="password2"  placeholder="Confirm Password">
          </div>
          
          <button type="submit" class="btn btn-primary btn" name="Submit">Sign Up</button>
          <p>
            Already A Member?<a href="first_log.php" data-toggle="modal"  data-target="#lewis" >Sign In</a>
          </p>
</form>
        
      </div>
      <div class="modal-footer">
        
        <button class="btn btn-danger" data-dismiss="modal">close</button>
      </div>
      
    </div>
    
  </div>
  
</div>



<!-- secondd modal -->

<div class="modal fade" id="lewis">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="close" data-dismiss="modal"></div>
        <h3>Log In</h3>
        
      </div>
      <div class="modal-body">
                
<form method="POST" class="form-container">
        <h1 style="color: #757575 "></h1>
        <div class="form-group">
         <label>User Name</label>
          <input type="text" class="form-control" name="username" placeholder="User Name">


        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password1"  placeholder="Password">
        </div>
        
        <button type="submit" class="btn btn-primary btn" name="login">Log In</button>
           <p>
            Not Yet A Member?<a href="register.php" data-toggle="modal"  data-target="#benson" >Sign Up</a>
          </p>

</form>
        
      </div>
      <div class="modal-footer">
        
        <button class="btn btn-danger" data-dismiss="modal">close</button>
      </div>
      
    </div>
    
  </div>
  
</div>

<!--button part -->

<div class="lewis-content" style="text-align: center;
  justify-content: center;position: middle;   position: absolute;
    top: 50%;left: 50%;">

<button type="button" class="btn btn-outline-light" data-toggle="modal"  data-target="#benson">Sign Up</button>
<button type="button" class="btn btn-outline-dark" data-toggle="modal"  data-target="#lewis">Log In</button>



</div>








  </div>

    </div>










    <!-- Bootstrap core JavaScript -->
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
 <script src="alert/sweet-alert.js"></script>
    <script src="alert/sweetalert.js"></script>








<!--  modal -->

<script type="text/javascript">
  
</script>
<!--  -->


</body>
</html>