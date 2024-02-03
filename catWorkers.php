<?php session_start(); ?>
<!DOCTYPE html>
<html>

<?php include 'mainPartsCode/head.php'; ?>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section ">
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
            <li class="nav-item active">
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

  <!-- workers section -->

  <section class="shop_section layout_padding">
    
    <div class="container">
      <div class="heading_container heading_center">
        <h2 class="secondary-color">Our Workers</h2>
      </div>
      
    <div class="row">
      <?php 
        require 'php/db.php';
        if (!isset($_SESSION['workers_cat'])) {
          $_SESSION['workers_cat'] = array();
        $query = "SELECT workers.first_name, workers.last_name, category.cat_name 
        FROM workers
        JOIN category ON workers.cat_id = category.cat_id";
        $query_run = mysqli_query($conn, $query);
        $check_workers = mysqli_num_rows($query_run) > 0;
        } else {
          $workers_cat = $_SESSION['workers_cat'];
          $check_workers = count($workers_cat) > 0;
        
        }
        if ($check_workers) {
          foreach ($workers_cat as $row) {
              ?>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                      <div class="picture">
                       
                          <img class="img-fluid" src="<?php echo $_SESSION['profile_pic'] ?>">
                      </div>
                      <div class="team-content">
                          <h3 class="name"> <?php echo $row['first_name']." ". $row['last_name']; ?> </h3>
                          <h4 class="title"><?php echo $row['cat_name'] ?></h4>
                      </div>
                      <ul class="social">
                          <a href="categories.php">Make Offer</a>
                      </ul>
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
  </section>
  <!-- end workers section -->



  <?php include 'mainPartsCode/footer.php'; ?>



  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>
