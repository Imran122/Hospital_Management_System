<?php include('action.php') ?>















<!DOCTYPE html>
<html>
<head>
	<title>Doctor Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <style type="text/css">
    	
     body{
     	margin:0 auto;
     	background-image: url("img/login/hospital.png");
     	background-repeat: no-repeat;
     	background-size: 100% 720px;
     	 background-size: cover;
     	 height: 100%;
     }

     .container{
     	width: 500px;
     	height: 450px;
     	text-align: center;
     	margin: 0 auto;
     	background-color: #3863AC;
     	background:rgba(0,0,0,0.3);
     	
     	border-radius: 04px;
     	margin-top: 160px;
     }
     .container img{
     	width: 150px;
     	height: 150px;
     	margin-top: 2px;
     	margin-right: 30px;
     	text-align: center;
     	border-radius: 75px;
     }
.from_input{
	margin-top: 8px;
	border-radius: 8px;
	}

	.from_input a{
		margin-top: 20px;
	}
.btn-login{
	margin-top: 8px;
	border-radius: 6px;
	text-decoration-color:#24784B;

}

    </style>

</head>
<body>
   
     <div class="container">
       <img src="img/login/12.gif">

          <form method="POST" action="action.php">
          	 <div class="from_input">
          	
          	 <i class="fa fa-user fa-2x"></i>
          	 	<input type="text" name="username" placeholder="Enter Your User Name"/>
          	 </div>

          	 <div class="from_input">
          	 <i class="fa fa-unlock fa-2x" style="color: red;"></i>
          	 	<input type="password" name="password" placeholder="Enter Your password">
          	 </div>

          	 <input type="submit" name="submit" value="LOGIN" class="btn-login">


          </form>
     	


     </div>

















 <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>


</body>
</html>