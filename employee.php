









<!DOCTYPE html>
<html>
<head>
	<title>Employee Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

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
    <link href="css/sweetalert.css" rel="stylesheet">
    <link href="css/success.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <style type="text/css">
    	
     body{
     	margin:0 auto;
     	background-image: url("img/login/em.jpg");
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
     
     	
     	border-radius: 04px;
     	margin-top: 160px;
     	background-color:rgba(0,0,0,0.2);
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
       <img src="img/login/emlogo.gif">

          <form class="from-group" method="POST" action="login.php">
          	 <div class="from_input">
          	
          	 <i class="fa fa-user fa-2x"></i>
          	 	<input type="text" name="username" id="username" placeholder="Enter Your User Name"/>
          	 </div>

          	 <div class="from_input">
          	 <i class="fa fa-lock fa-2x"></i>
          	 	<input type="password" name="password" id="password" placeholder="Enter Your password">
          	 </div>

          	 
          	 <button type="submit" name="login_submit" id="alert" value="LOGIN" class="btn-login ">Submit</button>


          </form>
     	


     </div>

















 <!-- Bootstrap core JavaScript -->
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





    <!--  -->
   <script>
    swal("Login Here Admin");
   </script>
<!--  -->

    

</body>
</html>