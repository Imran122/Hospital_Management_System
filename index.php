
<?php session_start();
$con=mysqli_connect("localhost","root", "","Hospital Management System");
?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
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
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
     <div class="overlay ">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >





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
              <a class="nav-link js-scroll-trigger" href="#services">Home</a>
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
            <a class="dropdown-toggle" style="color: #e6e6e6; " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="" ></span></a>  
            
         
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
















    <!-- -------------------     ---Header -->
<div class="header-container">
   <div class="video-container">
       

       <video preload="true" autoplay="autoplay" loop="loop" volume="0" poster="img/a.j">
           <source src="video/videoplayback.mp4" type="video/mp4">
         

       </video>    

     
   </div>  <!end of video container -->

   <h3>WELCOME TO DAFFODIL HOSPITAL LTD</h3>
   
<section id="slider" class="text-center">
<div > 
  <div class="container">
      
     
<!--  new -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
             
  <div class="carousel-inner">
    <div class="carousel-item active">
     <h4>“Health is harmony” <br>“health is happiness!”</h4>
             <h2><span>“Each patient carries his own doctor inside him”</span></h2>
    </div>
    <div class="carousel-item">
     <h4>“Health is harmony” <br>“health is happiness!”</h4>
             <h2><span>“Each patient carries his own doctor inside him”</span></h2>
    </div>
    <div class="carousel-item">
    <h4>“Health is harmony” <br>“health is happiness!”</h4>
             <h2><span>“Each patient carries his own doctor inside him”</span></h2>
    </div>
  </div>
</div>
<!-- ed new -->


  </div>
</div>
</section>


</div>

</div>

                  <!-- login start -->
         <div id="loginModal" class="modal fade" role="dialog">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                
                  <button class="close" type="buton" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Login</h4>
                 </div>
                 
                 <div class="modal-body">
                  <label>Username</label>
                  <input type="text" name="email" id="email" class="form-control">
                  <br/>
                  <label>Password</label>
                  <input type="password" name="password" id="password" class="form-control">
                  <br/>

                  <button type="button" name="login_button" id="login_button" class="btn btn-warning">LogIn</button>

                 </div>
              

              </div>
            

           </div>
          


         </div>


          <!-- login end -->
        





    <!-- --------------------------------Services -->
 

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Here is our Doctors</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/01-full.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Dr. Aljebra</h4>
              <p class="text-muted">MBBS,FPPS SRUJEON</p>
              <p class="text-muted">Consultant, Surgery</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02-full.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Dr. Nitore</h4>
              <p class="text-muted">MBBS, MACP (USA), FCPS(UK)</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-full.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Dr. THAMINA BANU</h4>
              <p class="text-muted">MBBS,CONSULTANT,ANESTHESIOLOGY</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/04-full.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Prof. Dr. Mhummad Ali</h4>
              <p class="text-muted">MBBS, DEM,MRCP(UK),M.PHIL</p>
              <p class="text-muted">Director Medical Services</p>

            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/05-full.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Dr. Natasha</h4>
              <p class="text-muted">MBBS,FCPS,CONSULTANT ,INTERNAL MEDICINE</p>
              <p class="text-muted">Advanced training in Urology(India)</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/06-full.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Dr. Miraz Uddin</h4>
              <p class="text-muted">MBBS, MCh, FCPS(surjery)</p>
              <p class="text-muted">Consultant & Obsteric & Gynecology</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">WE ARE PROVIDING BEST TREATMENT EVER IN THE NATION.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/01.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2009-2011</h4>
                    <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">All emergency and in-house outpatient services remain fully operational. Some mobile services/visiting doctor clinics may be rescheduled. Patients will be notified if rescheduling is necessary.
                    All staff report to work as scheduled. </p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/02.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>March 2011</h4>
                    <h4 class="subheading">Our Mission to Serve</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">When individuals are admitted to a hospital, they can be designated as “inpatient” or under “observation status.”  Many patients are unaware of these designations, which can have far-reaching consequences for billing and for subsequent treatment.  These consequences are of particular concern to seniors who are covered by Medicare.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/03.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>December 2012</h4>
                    <h4 class="subheading">Historical Change in our Hospital</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Before the National Health Service began in 1948 many of the hospitals in England, Scotland, Ireland and Wales were within the voluntary sector. These included the major centres of general acute medicine, notably hospitals with medical schools, along with special hospitals providing care for particular groups of diseases, and the cottage hospitals which flourished in small towns and rural areas. Voluntary hospitals were characterised by their independent status and their reliance on philanthropy and other private sources of funding. They were administered by committees of lay governors serving in a volunteer capacity and were staffed largely by physicians and surgeons working in honorary and unpaid posts.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/04.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 2014</h4>
                    <h4 class="subheading">Best Hospital Ever</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Before the National Health Service began in 1948 many of the hospitals in England, Scotland, Ireland and Wales were within the voluntary sector. These included the major centres of general acute medicine, notably hospitals with medical schools, along with special hospitals providing care for particular groups of diseases, and the cottage hospitals which flourished in small towns and rural areas. Voluntary hospitals were characterised by their independent status and their reliance on philanthropy and other private sources of funding.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Hospital Management Team</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/img1.jpg" alt="">
              <h4>Kay Garland</h4>
              <p class="text-muted">Director</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/img2.jpg" alt="">
              <h4>Larry Parker</h4>
              <p class="text-muted">Chairman</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/img3.jpg" alt="">
              <h4>Diana Pertersen</h4>
              <p class="text-muted">Managing Director</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    
      </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/hs3.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/hs1.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
 
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Send Your Details Here.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" class="form-group"  action="index_action.php" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" phone="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                    <div class="form-group">
                    <input class="form-control" password="password" type="password" placeholder="Your password *" required data-validation-required-message="Please enter your password.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">


             
                  <div id="success"></div>
                  <button name="register_btn" class="btn btn-primary btn-xl text-uppercase" type="submit">Send</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018,Md. Imran Hossain</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

   

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

<script>
    $('.dropdown').hover(function(){ 
  $('.dropdown-toggle', this).trigger('click'); 
});

</script>

  </body>

</html>
