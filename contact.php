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

            
            <?php include 'mainPartsCode/profileIcon.php' ?>
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

    <?php include 'mainPartsCode/footer.php'; ?>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/contact.js"></script>
  </body>
</html>