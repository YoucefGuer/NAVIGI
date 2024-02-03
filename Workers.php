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
      <?php 
      if (isset($_SESSION['success'])) {
        echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
        unset($_SESSION['success']);
      }
      if (isset($_SESSION['error'])) {
        echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
        unset($_SESSION['error']);
      }
      ?>
      <div class="heading_container heading_center">
        <h2 class="secondary-color">Our Workers</h2>
      </div>

    
      
    <div class="row justify-content-md-center">
      <?php 
        require 'php/db.php';
        $query = "SELECT workers.worker_id, workers.first_name, workers.last_name, category.cat_name 
        FROM workers
        JOIN category ON workers.cat_id = category.cat_id";
        $query_run = mysqli_query($conn, $query);
        $check_workers = mysqli_num_rows($query_run) > 0;
        if($check_workers){
          while($row = mysqli_fetch_assoc($query_run)){
      ?>
          
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="our-team">
                <div class="picture">
                  <img class="img-fluid" src="navigi-images/amine.png">
                </div>
                <div class="team-content">
                  <h3 class="name"> <?php echo $row['first_name']." ". $row['last_name']; ?> </h3>
                  <h4 class="title"><?php echo $row['cat_name'] ?></h4>
                </div>

                <?php if (isset($_SESSION['user_id'])) { ?>
                <ul class="social">
                  <button type="button" class="btn text-white btn-sm" 
                    data-toggle="modal" data-target="#exampleModalCenter" 
                    data-worker-id="<?php echo $row['worker_id']; ?>">
                    Make an Offer
                  </button>
                  <form action="searchProfile.php" method="post">
                      <input type="hidden" name="searchWorker_id" value="<?php echo $row['worker_id']; ?>">
                    <button type="submit" class="btn text-white btn-sm">
                      See Profile
                    </button>
                  </form>

                </ul>
                <?php 
                
              }
                else { ?>
                  <ul class="social">
                    <a href="login.php">Login to make an offer</a>
                  </ul>
                <?php }
                ?>

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
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Offer Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form action="php/offers.php" method="POST">
            <input type="hidden" name="worker_id" value="">
            <div class="form-group">
              <label for="offer-desc">Offer description</label>
              <textarea rows="6" name="offer-desc" id="offer" class="form-control" placeholder="Describe your offer here ..."></textarea>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Budget (DA) </label>
              <input type="number" name="budget" class="form-control" placeholder="Budget here ...">
            </div>

            <div class="modal-foot">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit offer</button>
            </div>
            </form>
          </div>
        </div>
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
  <script>
    $('#exampleModalCenter').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var worker_id = button.data('worker-id'); // Extract info from data-* attributes
        var modal = $(this);
        modal.find('input[name="worker_id"]').val(worker_id);
    });
</script>

</body>

</html>