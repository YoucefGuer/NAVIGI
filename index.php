<?php session_start(); 
if (isset($_GET['join_as_worker']) && !isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
else if (isset($_GET['join_as_worker']) && isset($_SESSION['user_id'])) {
    header("Location: profile.php");
    exit();
}
?>
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
      href="/navigi-images/favicon.png"
      type="image/x-icon"
    />

    <title>NAVIGI</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

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
              <li class="nav-item active">
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
                <a href="offer.php" class="sub-menu-link">
                  <img src="navigi-images/profile.png" >
                  <p>Offers</p>
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

      <!-- information section -->

      <section class="information_section">
        <div class="information_container">
          <div class="row">
            <div class="col-md-7">
              <div class="detail-box">
                <h1>
                  Welcome To <br />
                  NAVIGI
                </h1>
                <p>
                  Navigi brings together a diverse range of skilled professionals to meet your every need. From Mechanics to Welders, Carpenters to Electricians, Plumbers to Painters, and Masons to many more, our platform is your gateway to connecting with experts in a variety of trades. Whether you have a home improvement project, a repair job, or any other service requirement, Navigi is your one-stop destination for finding the right talent. Explore our categories and connect with professionals who can turn your vision into reality.
                </p>
              
                <?php if (!isset($_SESSION['is_worker'])): ?>
                  <a href="?join_as_worker=1">Join as Worker</a>
                <?php endif; ?>

              </div>
            </div>
            <div class="col-md-5">
              <div class="img-box">
                <img src="navigi-images/slider-img.svg" alt="Worker" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- end information section -->
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
            <a href="#">
              <div class="box box-mechanic category-box">
                <div class="dark_over"></div>
                <h6>Mechanic</h6>
              </div>
            </a>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="#">
              <div class="box box-welder category-box">
                <div class="dark_over"></div>
                <h6>Welder</h6>
              </div>
            </a>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="#">
              <div class="box box-carpenter category-box">
                <div class="dark_over"></div>
                <h6>Carpenter</h6>
              </div>
            </a>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="#">
              <div class="box box-electrician category-box">
                <div class="dark_over"></div>
                <h6>Electrician</h6>
              </div>
            </a>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="#">
              <div class="box box-plumber category-box">
                <div class="dark_over"></div>
                <h6>Plumber</h6>
              </div>
            </a>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="#">
              <div class="box box-painter category-box">
                <div class="dark_over"></div>
                <h6>Painter</h6>
              </div>
            </a>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="#">
              <div class="box box-mason category-box">
                <div class="dark_over"></div>
                <h6>Mason</h6>
              </div>
            </a>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <a href="#">
              <div class="box box-tailor category-box">
                <div class="dark_over"></div>
                <h6>Tailor</h6>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="btn-box">
        <a href="categories.php"> See All </a>
      </div>
    </section>

    <!-- end categories section -->

    <!-- Workers Section -->

    <section class="worker">
      <div class="heading_container heading_center">
        <h2 class="secondary-color">Our Workers</h2>
      </div>
      <div class="slide-container swiper">
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
            

            <?php 
        require 'php/db.php';
        $query = "SELECT workers.first_name, workers.last_name, category.cat_name 
        FROM workers
        JOIN category ON workers.cat_id = category.cat_id";
        $query_run = mysqli_query($conn, $query);
        $check_workers = mysqli_num_rows($query_run) > 0;
        if($check_workers){
          $rows = [];
          while($row = mysqli_fetch_assoc($query_run)){
              $rows[] = $row;
          }

          for($i = 0; $i < 3; $i++){
          ?>
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                          <img
                              src="navigi-images/amine.png"
                              alt=""
                              class="card-img"
                          />
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name"> <?php echo $rows[$i]['first_name']." ". $rows[$i]['last_name']; ?> </h2>
                      <p class="description"> <?php echo $rows[$i]['cat_name'] ?> </p>
                  </div>

              </div>
      <?php
        }
        } else {
          echo "No workers found";
        }
      ?>
  
          </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="btn-box">
        <a href="workers.php"> See All </a>
      </div>
    </section>

    <!--END Workers Section-->

    <!-- About NAVIGI team -->
    <section class="about_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>About NAVIGI's team</h2>
        </div>
      </div>
      <div class="container px-0">
        <div
          id="customCarousel2"
          class="carousel carousel-fade"
          data-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="box">
                <div class="about_info">
                  <div class="about_name">
                    <h5>GUERGOUR Youcef</h5>
                  </div>
                </div>
                <p>
                  CEO of NAVIGI <br>
                  multimedia  manager at ETC <br>
                  2nd year student at Ensia <br>
                  Front end developer.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="about_info">
                  <div class="about_name">
                    <h5>KICHAH Mohammed El Amine</h5>
                  </div>
                </div>
                <p>
                  Project manager <br>
                  2nd year student at Ensia <br>
                  Full stack web developer.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="about_info">
                  <div class="about_name">
                    <h5>DERAFA Mohamed El Khalil</h5>
                  </div>
                </div>
                <p>
                  Events manager at ETC<br>
                  2nd year student at Ensia<br>
                  UI/UX designer <br>
                  backend devloper.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel_btn-box">
            <a
              class="carousel-control-prev"
              href="#customCarousel2"
              role="button"
              data-slide="prev"
            >
              <i class="fa fa-angle-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#customCarousel2"
              role="button"
              data-slide="next"
            >
              <i class="fa fa-angle-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end about NAVIGI team -->

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
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- JavaScript -->
    <script src="js/script.js"></script>
  </body>
</html>
