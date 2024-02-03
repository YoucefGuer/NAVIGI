<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

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
              <li class="nav-item ">
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

      <?php

require 'php/db.php';
require 'php/offershow.php';
session_start();
$offerHandler = new OfferHandler($conn);

$userId = $_SESSION['user_id'];
$projects = $offerHandler->getPendingProjects($userId);

?>

<section class="layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2 class="secondary-color">Your Projects</h2>
        </div>

        <div id="table-styleaa">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <th>Worker</th>
                    <th>worker phone </th>
                    <th>Budget</th>
                    <th>Status</th>
                </thead>
                <?php
                if (!empty($projects)) {
                    foreach ($projects as $project) {
                ?>
                        <tr>
                            <td><?php echo $project['first_name'] . " " .$project['last_name']; ?></td>
                            <td><?php echo $project['phone']; ?></td>
                            <td><?php echo $project['budget']; ?></td>
                            <td>
                                <button class="btn bg-success text-white accept-btn" 
                                data-toggle="modal" data-target="#giveRating" > Done </button>

                                <button class="btn bg-danger text-white refuse-btn" 
                                onclick="updateProjectStatus(<?php echo 
                                $project['project_id']; ?>, 'cancelled')"> Cancel </button>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='3'>No Projects found</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>



    <!-- Modal -->
        <div class="modal fade" id="giveRating" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <input type="number" class="form-control" id="rating" min="0" max="5" name="rating" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"                                 
                        onclick="updateProjectStatus(<?php echo $project['project_id']; ?>, 'done', document.getElementById('rating').value )"
                        >Give Rating</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>



    <script>
    function updateProjectStatus(projectId, status, rating) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'php/updateProjectStatus.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    // Handle the success response
                    console.log(xhr.responseText);
                    location.reload();
                    // Optionally, you can update the UI or perform other actions based on the response
                } else {
                    // Handle errors
                    console.error('Error updating project status');
                }
            }
        };

        // Send the request with projectId and status as parameters
        xhr.send('projectId=' + projectId + '&status=' + status + '&rating=' + rating);
    }
</script>

</section>


<?php include 'mainPartsCode/footer.php'; ?>

  <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/check.js"></script>

  
  </body>
</html>
