<?php
include("connect.php");
include("functions.php");

$error="";
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Happy Faces</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>
  <div id="error" class = "error1" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-envelope"></i>contact@happyfaces.ca</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>123-456-7890</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Happy<em> Faces</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.canadahelps.org/en/dn/23841">Donate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hire.php">Hire them</a>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
              
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="about.php">About Us</a>
                    <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <?php 
                  if(logged_in()) {
                ?>
                <a class="filled-button" style="color:black;" href="logout.php">Logout</a>
                <?php } else { ?>
                <a class="filled-button" style="color:black;" href="login.php">Login</a>
                <?php  } ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Help the homeless!</h6>
                  <h4>Provide meals <br> by donating today!</h4>
                  <p>Together, we can help more people live with comfort and dignity. <br>We provide delicious, nutritious hot meals to the homeless. </p>
                  <a href="donate.php" style="color:black;" class="filled-button">Donate today!</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Tired of cooking everyday? </h6>
                  <h4>Eat complete &amp;   <br> nutritious meals</h4>
                  <p>We provide a healthy nutritious Lunch & Dinner meal plans with variable options to select from. Build your own meal plan today. </p>
                  <a href="menu.php" style="color:black;" class="filled-button">Order Now!</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>A new pathway for sustainibility.</h6>
                  <h4>Help us &amp;  <br> Hire them today!</h4>
                  <p>They are skiiled and trained people who requires a job to start their path to grow on their own.</p>
                  <a href="hire.php" style="color:black;" class="filled-button">Hire them!</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our <em>Services</em></h2>
              <span>Its all about helping the homeless.</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/slider-image-1-1920x900.jpg" alt="">
              <div class="down-content">
                <h4>Meals to the Homeless</h4>
                <p>We are daily providing a healthy-nutrioius meals to the homeless. It includes various cuisine's including the indigenous food. <br>Help us by donating today.</p>
                <a href="https://www.canadahelps.org/en/dn/23841" class="filled-button">Donate today</a>
              </div>
            </div>
            
            <br>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/icon.png" alt="">
              <div class="down-content">
                <h4>Helping hand for employment seekers</h4>
                <p>Do you need employees for your business? We are training the homeless improve their skills to get a job. Help them live on their own. Hire them today!</p>
                <a href="hire.php" class="filled-button">Hire Them</a>
              </div>
            </div>

            <br>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/slider-image-2-1920x900.jpg" alt="">
              <div class="down-content">
                <h4>Meals for the People</h4>
                <p>We are providing diverse and affordable meal plans for the poeple of thunderbay. We will take orders in advanced and get it delivered. We also have weekly and monthly plans. </p>
                <a href="menu.php" class="filled-button">Order Now</a>
              </div>
            </div>

            <br>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/icon.png" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>Who we are</span>
                <h2>Get to know about <em>our initiatve</em></h2>
                <p>We are a team of five people who are enrolled in a program at Confederation College. We came accross the situation of shelter house and decded to do something better.</p>
                <a href="about.php" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Happy Faces</h4>
            <p>A new pathway to sustainibility.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
          
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="menu.php">Menu</a></li>
              <li><a href="https://www.canadahelps.org/en/dn/23841">Donate</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="hire.php">Hire Them</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2021 Happy Faces
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>