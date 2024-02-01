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
              <li class="nav-item">
                <a class="nav-link" href="categories.php">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="workers.php">Workers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <li class="nav-item active">
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

    <div class="container contact-container">
      <div class="col-form">
        <form action="/" method="POST" onsubmit="return submitContactForm()">
          <h2 class="title">contact us</h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Full Name" name="username" id ="FullName"/>
          </div>
          <span class="errorMessage" id="FullNameError"></span>

          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" id="Email" />
          </div>
          <span class="errorMessage" id="EmailError"></span>

          <div class="input-field">
            <i class="fa fa-phone-volume"></i>
            <input
              type="text"
              placeholder="Phone Number"
              name="phone"
              id="Phone"
            />
          </div>
          <span class="errorMessage" id="PhoneError"></span>

          <div class="input-field">
            <i class="fa fa-comment-dots"></i>
            <input type="text" placeholder="message" name="message" id="Msg" />
          </div>
          <span class="errorMessage" id="MsgError"></span>

          <input type="submit" value="SEND" class="send-btn" />
        </form>
      </div>
      <div class="col-image">
        <img src="navigi-images/msg.svg" />
      </div>
    </div>

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
    <script src="js/contact.js"></script>
  </body>
</html>