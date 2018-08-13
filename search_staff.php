




<?php 
include("login.php");
function get_staff(){

global $con;
if(isset($_POST['staff_search_submit']))

{
  $contact= $_POST['search'];
  $query= "select * from staff where contact ='$contact'";
  $result=mysqli_query($con,$query);

   
  

  while($row=mysqli_fetch_array($result))
  {
   $fname=$row['fname'];
  $lname=$row['lname'];
  $email=$row['email'];
  $contact=$row['contact'];
  $address=$row['address'];
            echo"
             <tr>
                 
                  <td >$fname</td>
                  <td>$lname</td>
                  <td>$email</td>
                  <td>$contact</td>
                  <td>$address</td>
                </tr>";



  }
  echo "</tbody> </table> </div> </div>";
}
}

?>
<!DOCTYPE html>

<html>
<head>
  <title>Staff Details</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap core CSS -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
     <link href="css/success.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
 
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
          background-position: center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;

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

#search{
  
} 
.form-control{
  width: 190px;
}
#search > form > input.form-control{
  margin-top: -30px;
  width: 286px;
}

#search > form > input.btn.btn-light{
  margin-top: -39px;
}

</style>






</head>
<body>
<div class="jumbotron" style="background-image:url(img/employe/patient.jpg);">
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
                     <a href="payment.php" class="list-group-item ">Payment/Checkout</a>

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
         <div class="card">
                <!--marqueee and search part -->
                    <div  class="card-body-first">

                <div class="col-md-7" >
                <marquee direction="left" scrollamount="10" behavior="alternate" onmouseover="stop()" onmouseout="start()"><a href="">STAFF DETAILS</a></marquee>
                       </div>

                       <div id="search" class="col-md-5" style="float: right;">
                            
                            <form class="from-group" action="search_staff.php" method="post">
                              <input type="text" name="search" class="form-control" placeholder="Enter Contact">
                              <input type="submit" name="staff_search_submit" value="search" class="btn btn-light" style="float: right;">

                            </form>



                       </div>


             </div>


                      <!--marqueee and search part end -->

             <div class="card-body">
                    <table class="table table-hover">
              <thead>
                <tr>
                 
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email Id</th>
                  <th scope="col">Contact</th>
                  <th scope="col">Address</th>
                </tr>
              </thead>
              <tbody>

                
              </tbody>
              <tbody>
                <?php get_staff(); ?>
              </tbody>
            </table>




             </div>

          
         </div>
         </div>

         <div class="col-md-1">
          
         </div>
        

      </div>
        

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








<!--  drop down -->

<!--  drop down -->

<script>
    $('.dropdown').hover(function(){ 
  $('.dropdown-toggle', this).trigger('click'); 
});



swal("Josh Admin!", "We Found Something!", "success");
</script>


</body>
</html>