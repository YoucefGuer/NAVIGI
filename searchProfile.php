<?php session_start(); ?>
<!DOCTYPE html>
<html>

<?php include 'mainPartsCode/head.php'; ?>

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

          
          <?php include 'mainPartsCode/profileIcon.php' ?>

    <!-- end header section -->

  </div>
  <!-- end hero area -->
<div class="container3">
    
    <div class="About">

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        include 'php/db.php';
        $worker_id = $_POST['searchWorker_id'];
        $sql = "SELECT * FROM workers WHERE worker_id = $worker_id";
        $result = mysqli_query($conn, $sql);
        
        $row = mysqli_fetch_assoc($result);
        error_reporting(E_ALL); ini_set('display_errors', '1');
    ?>

        <div class="elements rounded">
            <div class="class-body">
                <h1 class="m-3 pt-3">About</h1>
                <img src= "uploads/default.png" id="profilePicCard">
            </div>
            <div class="card-body">
                <div class="row1">
                    <div class="col-md-3">
                        <h5>Full Name</h5>
                    </div>
                    <div class="Name">
                        <?= $row['first_name'] . " " . $row['last_name']; ?> 
                    </div>
                </div>
                <hr>
                <div class="row1">
                    <div class="col-md-3">
                        <h5>Email</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                        <?php echo $row['email']; ?>
                    </div>
                </div>
                <hr>
                <div class="row1">
                    <div class="col-md-3">
                        <h5>Phone</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                        <?php echo '0'.$row['phone']; ?>
                    </div>
                </div>
                <div class="row1">
                    <div class="col-md-3">
                        <h5>Address</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                        <?php echo $row['adress']. " " .$row['city'] ?>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>

        <div class="fot">
            <h1 class="m-3">Recent Projects</h1>
            <div id="table-styleaa">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                 
                    <th>User</th>
                    <th>budget</th>
                    <th>rating /5</th>

                </thead>
                        <tr>
                            
                            <td>User1</td>
                            <td>10000</td>
                            <td>5</td>
                        </tr>
            </table>
        </div>
        </div>

    </div>
</div>
</div>

<?php include 'mainPartsCode/footer.php'; ?>
  
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
      </script>
      <script src="js/custom.js"></script>
</body>
</html>