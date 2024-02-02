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
      if (isset($_SESSION['successEdit'])) {
        echo "<div class='alert alert-success'>".$_SESSION['successEdit']."</div>";
        unset($_SESSION['successEdit']);
      }
      if (isset($_SESSION['errorEdit'])) {
        echo "<div class='alert alert-danger'>".$_SESSION['errorEdit']."</div>";
        unset($_SESSION['errorEdit']);
      }
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
                        <?= $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?> 
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
                        <?php echo $_SESSION['address']. " " .$_SESSION['city'] ?>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editProfile">
                Edit Your Profile
              </button>
            </div>
        </div>

        <?php if($_SESSION['is_worker'] == 1) { ?>
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
        <?php } ?>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Your Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="php/editProfile.php" method="post">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" name="first_name" id="firstName" value="<?= $_SESSION['first_name'] ?>" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" name="last_name" id="lastName" value="<?= $_SESSION['last_name'] ?>" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="<?= $_SESSION['email'] ?>" required>
            </div>
            <div class="form-group col-md-6">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" id="phone" name="phone" value="<?= $_SESSION['phone'] ?>" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" value="<?= $_SESSION['address'] ?>" required>
            </div>
            <div class="form-group col-md-6">
              <label for="city">City</label>
              <input type="text" class="form-control" id="city" name="city" value="<?= $_SESSION['city'] ?>" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="wilaya">Wilaya</label>
              <input type="text" class="form-control" id="wilaya" name="wilaya" value="<?= $_SESSION['wilaya'] ?>" required>
            </div>
            <div class="form-group col-md-6">
              <label for="age">Age</label>
              <input type="text" class="form-control" id="age" name="age" value="<?= $_SESSION['age'] ?>" required>
            </div>
          </div>

          
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
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