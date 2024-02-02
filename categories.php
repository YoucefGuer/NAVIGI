<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php include 'mainPartsCode/head.php'; ?>

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

            
            <?php include 'mainPartsCode/profileIcon.php' ?>
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

    <?php include 'mainPartsCode/footer.php'; ?>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/showcat.js"></script>
  </body>
</html>
