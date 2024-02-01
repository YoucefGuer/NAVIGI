<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      rel="shortcut icon"
      href="navigi-images/favicon.png"
      type="image/x-icon"
    />

    <title>NAVIGI</title>

    <!-- slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
  </head>

  <body>
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <nav class="navbar navbar-expand-lg custom_nav-container fix-top">
          <a class="navbar-brand" href="index.php">
            <span id="TITLE"> NAVIGI </span>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class=""></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="logo-header">
              <a href="index.php">
                <img
                  src="navigi-images/navigi-logo.svg"
                  alt="NAVIGI"
                  width="80px"
                />
              </a>
            </div>

            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="categories.php">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="workers.php">Workers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>

            
            <li class="nav-item" id="login-nav">
              <div class="user_option">
                <?php if (!isset($_SESSION['user_id'])): ?>
                <a class="nav-link" href="login.php">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  Account</a>
            <?php endif; ?>
                
              </div>
            </li>
                  
            <?php if (isset($_SESSION['user_id'])): ?>
              <img src="uploads/default.png" alt="profile" class="user-pic" onclick="toggleMenu()">
            <?php endif; ?>
            <div class="drop-menu" id="SubMenu">
              <div class="sub-menu">
                <div class="user-info">
                  <img src= "uploads/default.png">
                  <!--display users name-->
                    <h2> <?= $_SESSION['username']; ?> </h2>
                </div>
                <hr>
                <a href="Wprofile.php" class="sub-menu-link">
                  <img src="navigi-images/profile.png" >
                  <p>Your Profile</p>
                  <span>></span>
                </a>
                <a href="php/logout.php" class="sub-menu-link">
                  <img src="navigi-images/logout.png" >
                  <p>Logout</p>
                  <span>></span>
                </a>
              </div>
            </div>

          </div>
        </nav>
      </header>
      <!-- end header section -->
    </div>
    <!-- end hero area -->

    <!-- categories section -->

    <section class="categories_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2 class="secondary-color">Our Categories</h2>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="categories.php" >
              <div class="box box-mechanic category-box">
                <div class="dark_over"></div>
                <h6>Mechanic</h6>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="categories.php">
              <div class="box box-welder category-box">
                <div class="dark_over"></div>
                <h6>Welder</h6>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="categories.php">
              <div class="box box-carpenter category-box">
                <div class="dark_over"></div>
                <h6>Carpenter</h6>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="categories.php" >
              <div class="box box-electrician category-box">
                <div class="dark_over"></div>
                <h6>Electrician</h6>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="categories.php">
              <div class="box box-plumber category-box">
                <div class="dark_over"></div>
                <h6>Plumber</h6>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="categories.php" >
              <div class="box box-painter category-box">
                <div class="dark_over"></div>
                <h6>Painter</h6>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="categories.php">
              <div class="box box-mason category-box">
                <div class="dark_over"></div>
                <h6>Mason</h6>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="categories.php">
              <div class="box box-tailor category-box">
                <div class="dark_over"></div>
                <h6>Tailor</h6>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="categories.php" >
              <div class="box box-wash-car category-box">
                <div class="dark_over"></div>
                <h6>cleaner</h6>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="categories.php">
              <div class="box box-gardener category-box">
                <div class="dark_over"></div>
                <h6>Gardener</h6>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- end categories section -->

    <!-- info section -->

    <section class="info_section layout_padding2-top">
      <div class="info_container">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <h6>ABOUT US</h6>
              <p>
                We are students from ENSIA. Our mission at Navigi is to connect you with skilled professionals, providing top-notch services tailored to your needs.
              </p>
            </div>
            <div class="col-md-6 col-lg-4">
              <h6>CONTACT US</h6>
              <div class="info_link-box">
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>+213698781328</span>
                </a>
                <a href="mailto:youcefguer7@gmail.com">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>NAVIGI@ensia.edu.dz</span>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <h6>NEED HELP</h6>
              <p>
                Have questions or need assistance? Our dedicated support team at Navigi is here to help. Feel free to reach out anytime for prompt assistance.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- footer section -->
      <footer class="footer_section">
        <div class="container">
          <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="index.php">NAVIGI</a>
          </p>
        </div>
      </footer>
      <!-- end of footer -->
    </section>

    <!-- end info section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/showcat.js"></script>
  </body>
</html>
