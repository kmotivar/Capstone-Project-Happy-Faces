<?php
include("connect.php");
include("functions.php");

$error="";

$r1 = mysqli_query($con, "SELECT * FROM products WHERE meal_type = 'Dinner'");
$dinner = mysqli_fetch_all($r1);

$r2 = mysqli_query($con, "SELECT * FROM products WHERE meal_type = 'Drinks'");
$drinks = mysqli_fetch_all($r2);

$r3 = mysqli_query($con, "SELECT * FROM products WHERE meal_type = 'sides'");
$sides = mysqli_fetch_all($r3);

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

  <body style="background-image: url('assets/images/back.jpg');">
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
              <li class="nav-item">
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
                <a class="filled-button" style="color:black;" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Menu</h1>
            <span>Select Your Meal</span>
          </div>
        </div>
      </div>
    </div>
  
    <div class="services">
      <div class="container">
      <h1 class='headd'>Dinner</h1><br>

      <h2 class='headd1'>Main Course</h2>
        <div class="row">
        <?php 
          foreach ($dinner as $value)
              echo '<div class="col-md-4">
              <div class="service-item">
                <img src="assets/images/'.$value[6].'" alt="">
                <div class="down-content">
                  <span>
                    '.$value[5].'
                  </span>
                  <h4>'.$value[1].'</h4>
                  <div style="margin-bottom:10px;">
                    <span>
                        <sup>$</sup> '.$value[2].' <br>
                        
                    </span>
                  </div>
                  <p>'.$value[4].'</p>
                  <a class="filled-button">Select</a>
                </div>
              </div>
              <br>
            </div>';
        ?>
        </div>
        <hr>
        <h2 class='headd1'>Drinks</h2>

        <div class="row">

        <?php 
          foreach ($drinks as $value)
              echo '<div class="col-md-4">
              <div class="service-item">
                <img src="assets/images/'.$value[6].'" alt="">
                <div class="down-content">
                  
                  <h4>'.$value[1].'</h4>
                  <div style="margin-bottom:10px;">
                    <span>
                        <sup>$</sup> '.$value[2].' <br>
                        
                    </span>
                  </div>
                  <p>'.$value[4].'</p>
                  <a class="filled-button">Select</a>
                </div>
              </div>
              <br>
            </div>';
        ?>
        </div>
        <hr>
        <h2 class='headd1'>Sides</h2>

        <div class="row">

        <?php 
          foreach ($sides as $value)
              echo '<div class="col-md-4">
              <div class="service-item">
                <img src="assets/images/'.$value[6].'" alt="">
                <div class="down-content">
                 
                  <h4>'.$value[1].'</h4>
                  <div style="margin-bottom:10px;">
                    <span>
                        <sup>$</sup> '.$value[2].' <br>
                        
                    </span>
                  </div>
                  <p>'.$value[4].'</p>
                  <a class="filled-button">Select</a>
                </div>
              </div>
              <br>
            </div>';
        ?>
        <br><br><br><br>


        </div><br><hr>
        <a href="#" class="filled-button" style="color:black; ">Place Order</a><hr><br><br>
      </div>


      



    </div>

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Restaurant Website</h4>
            <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien vitae.</p>
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
                Copyright © 2020 Company Name
                - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
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