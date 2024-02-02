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

$offerHandler = new OfferHandler($conn);
$offers = $offerHandler->getOffers();
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
                    <th>budget</th>
                    <th>status</th>

                </thead>
                        <tr>
                            
                            <td>Worker1</td>
                            <td>10000</td>
                            <td>
                                <button class="btn bg-success text-white" >Done</button>
                                <button class="btn bg-danger text-white" >Cancel</button>
                            </td>
                        </tr>
            </table>
        </div>
    </div>
</section>

<?php include 'mainPartsCode/footer.php'; ?>

  <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/check.js"></script>

  
  </body>
</html>
