<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="navigi-images/favicon.png" type="image/x-icon" >

  <title>
    NAVIGI
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

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
    <header class="header_section ">
        <div class="profile">
      <nav class="navbar  navbar-expand-lg custom_nav-container  fix-top">
        <a class="navbar-brand" href="index.php">
          <span id="TITLE">
            NAVIGI
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <div class="logo-header">
            <a href="index.php">
              <img src="navigi-images/navigi-logo.svg" alt="NAVIGI" width="80px">
            </a>
          </div>

          <ul class="navbar-nav  ">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="categories.php">Categories</a>
            </li>
            <li class="nav-item ">
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

          <img src="navigi-images/profilePic.svg" alt="profile" class="user-pic" onclick="toggleMenu()">
          <div class="drop-menu" id="SubMenu">
            <div class="sub-menu">
              <div class="user-info">
                <img src="navigi-images/profilePic.svg" >
                <h2>Youcef Guergour</h2>
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
<div class="container3">
    
    <div class="About">
        <div class="elements">
            <div class="class-body">
                <h1 class="m-3 pt-3">About</h1>
                <img src="navigi-images/profilePic.svg" id="profilePicCard">
            </div>
            <div class="card-body">
                <div class="row1">
                    <div class="col-md-3">
                        <h5>Full Name</h5>
                    </div>
                    <div class="Name">
                        <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?> 
                    </div>
                </div>
                <hr>
                <div class="row1">
                    <div class="col-md-3">
                        <h5>Email</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                        <?php echo $_SESSION['email']; ?>
                    </div>
                </div>
                <hr>
                <div class="row1">
                    <div class="col-md-3">
                        <h5>Phone</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                        <?php echo $_SESSION['phone']; ?>
                    </div>
                </div>
                <div class="row1">
                    <div class="col-md-3">
                        <h5>Address</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                        <?php echo $_SESSION['address']. " , " .$_SESSION['city'] ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="fot">
            <h1 class="m-3">Recent Projects</h1>
            <div class="card-body">
                <h5>Project Name</h5>
                Project Description
            </div>
        </div>
    </div>
</div>
</div>

    <!-- info section -->

    <section class="info_section  layout_padding2-top">
        <div class="info_container ">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <h6>
                  ABOUT US
                </h6>
                <p>
                  We are students from ENSIA. Our mission at Navigi is to connect you with skilled professionals, providing top-notch services tailored to your needs.
                </p>
              </div>
              <div class="col-md-6 col-lg-4">
                <h6>
                  CONTACT US
                </h6>
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
                <h6>
                  NEED HELP
                </h6>
                <p>
                  Have questions or need assistance? Our dedicated support team at Navigi is here to help. Feel free to reach out anytime for prompt assistance.
                </p>
              </div>
              
            </div>
          </div>
        </div>
        <!-- footer section -->
        <footer class=" footer_section">
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
      </script>
      <script src="js/custom.js"></script>
</body>
</html>