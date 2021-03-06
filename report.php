
<?php
include "report_action.php";
if(isset($_POST["submit"]))
{
$allow=array('pdf');
$temp=explode(".", $_FILES['pdf_file']['name']);
$extension=end($temp);
$upload_file
}
?>


<!DOCTYPE html>
<head>
  
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Report</title>

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
    .overlay{
     width: 100%;

    background:rgba(0, 0, 0, .3);

  }



.dropdown-menu {
  position: absolute;
  top: 40%;
  left: -40px;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0px;
  margin: .125rem 0 0;
  font-size: 1rem;
  color: white;
  text-align: center;
  list-style: none;
  background-color: transparent;
  background-clip: padding-box;
  border: 0px solid rgba(0,0,0,.0);
  border-radius: .25rem;
  

  color: #212529;
 
  list-style: none;
}


html body#page-top div.overlay nav#mainNav.navbar.navbar-expand-lg.navbar-dark.fixed-top div.container div#navbarResponsive.collapse.navbar-collapse ul.navbar-nav.text-uppercase.ml-auto li.dropdown a.dropdown-toggle{
  color: white;
  margin-top: 20px;
   margin-top: 13px;

}


.dropdown-menu>li>a{background-color:transparent;
text-align: center;
color: black;

font-size: 17px;


}
.dropdown-menu>li>a:hover{ 
                  color: #fed136;
                  background-color:transparent;
                  border-color: transparent;
                  text-decoration: none;
}



/*.login h2{
    color: #ffd11a;
 
 display:inline;
  letter-spacing: 2px;
  font-size: 20px;
 font-family: 'Courgette', cursive;
 padding: 7px;
}   */

/*angle  */
.navbar-brand span {
    line-height: 0.5;
    color:#ff0101;
    text-transform: capitalize;
    transform: rotate(-33deg);
    -webkit-transform: rotate(-33deg);  /* Chrome, Safari, Opera */
    -moz-transform: rotate(-33deg);
    -o-transform: rotate(-33deg);
    -ms-transform: rotate(-33deg); /* IE 9 */

    display: inline-block;
}

.navbar-header h1{
  font-size: 15px;
}
.navbar-header img{
height: 40px;
margin-left: -31px;
width: 69px;
margin-top: 2px;
  }



p {
  line-height: 1.75;
}

a {
  color: #fed136;
}

a:hover {
  color: #fec503;
}

.text-primary {
  color: #fed136 !important;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 700;
  font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

section {
  padding: 100px 0;
}

section h2.section-heading {
  font-size: 40px;
  margin-top: 0;
  margin-bottom: 15px;
}

section h3.section-subheading {
  font-size: 16px;
  font-weight: 400;
  font-style: italic;
  margin-bottom: 75px;
  text-transform: none;
  font-family: 'Droid Serif', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

@media (min-width: 768px) {
  section {
    padding: 150px 0;
  }
}

.btn {
  font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-weight: 700;
}

.btn-xl {
  font-size: 18px;
  padding: 20px 40px;
}

.btn-primary {
  background-color: #fed136;
  border-color: #fed136;
}

.btn-primary:active, .btn-primary:focus, .btn-primary:hover {
  background-color: #fec810 !important;
  border-color: #fec810 !important;
  color: white;
}

.btn-primary:active, .btn-primary:focus {
  box-shadow: 0 0 0 0.2rem rgba(254, 209, 55, 0.5) !important;
}

::-moz-selection {
  background: #fed136;
  text-shadow: none;
}

::selection {
  background: #fed136;
  text-shadow: none;
}

img::selection {
  background: transparent;
}

img::-moz-selection {
  background: transparent;
}

#mainNav {
  background-color: #212529;
}

#mainNav .navbar-toggler {
  font-size: 12px;
  right: 0;
  padding: 13px;
  text-transform: uppercase;
  color: black;
  border: 0;
  background-color: #fed136;
  font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

#mainNav .navbar-brand {
  color: #fed136;
  font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica, Arial, cursive;
}

#mainNav .navbar-brand.active, #mainNav .navbar-brand:active, #mainNav .navbar-brand:focus, #mainNav .navbar-brand:hover {
  color: #fec503;
}

#mainNav .navbar-nav .nav-item .nav-link {
  font-size: 90%;
  font-weight: 400;
  padding: 0.75em 0;
  letter-spacing: 1px;
  color: black;
  font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

#mainNav .navbar-nav .nav-item .nav-link.active, #mainNav .navbar-nav .nav-item .nav-link:hover {
  color: #fed136;
}

@media (min-width: 992px) {
  #mainNav {
    padding-top: 25px;
    padding-bottom: 25px;
    -webkit-transition: padding-top 0.3s, padding-bottom 0.3s;
    -moz-transition: padding-top 0.3s, padding-bottom 0.3s;
    transition: padding-top 0.3s, padding-bottom 0.3s;
    border: none;
    background-color: transparent;
  }
  #mainNav .navbar-brand {
    font-size: 1.75em;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
  }
  #mainNav .navbar-nav .nav-item .nav-link {
    padding: 1.1em 1em !important;
  }
  #mainNav.navbar-shrink {
    padding-top: 0;
    padding-bottom: 0;
    background-color: #212529;
  }
  #mainNav.navbar-shrink .navbar-brand {
    font-size: 1.25em;
    padding: 12px 0;
  }
}
      /* style of other part  */

      .row{
        margin-top: 275px;
      }
      .jumbotron{

        height: 300px;
        background-size: cover;
        background-repeat: no-repeat;

      }
      .list-group a{
        color:#0080ff ;
      }

  .card-body-first{
        background-color: #0080ff;
        
        padding: 10px;
        border-radius: 6px;
            
            

      }
  .card-body-first a{
    color: white;
   font-style: italic;
   text-decoration: none;
   font-size: 23px;
   font-weight: bold;
  }

    </style>
    
</head>
<body>
    
    <div class="jumbotron" style="background-image:url(img/employe/em1.jpg);">
          <div class="overlay ">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">





      <div class="container">
     <!angle of icon -->

                <div class="navbar-header">
        
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-WDM-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
                     
                     <img class="cap" src="img/men.jpg">
          
          <h1><a style="margin-top: -31px;" class="navbar-brand" href="index.html"><span>D</span>affodil <span>H</span>ospital<span class="glyphicon glyphicon-education" aria-hidden="true"></span></a></h1>
        </div>





<!angle of icon -->

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Contact</a>
            </li>

          <li class="dropdown" style="margin-top: 13px; ">
            <a class="dropdown-toggle" style="color:black; " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="" ></span></a>  
            
         
          <ul class="dropdown-menu" >

          


            <li><a href="doctor.php">Doctor</a></li>
            <li><a href="employee.php">Employee</a></li>
           
      
          </ul>
        </li>
           
          </ul>
        </li>


          </ul>
        </div>
      </div>
       
    </nav>
    </div>

 <!-- 2nd part start  -->


 <div class="container-fluid">
      <div class="row">


         <div class="col-md-3">
             <div class="list-group">
              
                     <a href="" class="list-group-item active">Patient</a>
                     <a href="patient_details.php" class="list-group-item ">Patient Details</a>
                     <a href="employee_account.php" class="list-group-item ">Add New Patient</a>
                     <a href="report.php" class="list-group-item ">Statistical Report</a>

             </div>
             <hr>
             <div class="list-group">
              
                     <a href="" class="list-group-item active">Staff</a>
                     <a href="staff_details.php" class="list-group-item ">Staff Details</a>
                     <a href="staff.php" class="list-group-item ">Add New Staff</a>
                    

             </div>
             <!-- diagonistic center -->
             <div class="list-group">
              
                     <a href="" class="list-group-item active">Diagnostic Center</a>
                     <a href="report.php" class="list-group-item ">Patient Report Upload</a>
                     
                    

             </div>
<!-- diagonistic center -->
         </div>

         <div class="col-md-8">
                  
<div id="content">

  <form action="report_action.php" method='post' enctype="multipart/form-data">
Description of File: <input type="text" name="pdf_file" class="form-control form-input form-style-base" accept="application/pdf" /><br><br>
<h4 id="fake-btn" class="form-input fake-styled-btn text-center truncate"><span class="margin">Choose File</span></h4>
  
<input type="submit" name="submit" class="btn btn-info" value="Upload"/>

</form>

</div>

             

            </div>

         </div>

         <div class="col-md-1">
          
         </div>
        

      </div>
        

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








<!--  drop down -->

<script>
    $('.dropdown').hover(function(){ 
  $('.dropdown-toggle', this).trigger('click'); 
});



</script>



<!--  -->


</body>
</html>