<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="shortcut icon" href="navigi-images/favicon.png" type="image/x-icon">
      <!-- slider stylesheet -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      

      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <link href="css/main.css" rel="stylesheet"  />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />

  
  </head>
  <body>
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
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>

            
            <?php include 'mainPartsCode/profileIcon.php' ?>
      <!-- end header section -->

    <div class="container1">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="http://localhost/NAVIGI-FINAL/php/signin.php" id="loginForm"  class="sign-in-form" method="POST">

            <h2 class="title">Sign In</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input  id="email" placeholder="email" name="email"  />
            </div>
            <span id="emailNotValid" class="email-notvalid"> please enter a valid email</span>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="password" placeholder="Password" name="password" />
            </div>
            <span id="passwordError" class="password-error">Incorrect password, try again</span>
            <span id="passwordLength" class="password-length"> !! Password should be at least 8 characters</span>
            <span id="emptyfield" class="emptyfield"> please fill all the fields</span>

            <input type="submit" value="Login" class="mybtn" />

            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
             
            </div>
          </form>


          <form action="http://localhost/NAVIGI-FINAL/php/signup.php" class="sign-up-form"  method="POST">
            <h2 class="title">Sign Up</h2>
            <div class="input-field">

              <i class="fas fa-user"></i>
              <input type="text" id="username" placeholder="Username" name="username"  />
            </div>
            <span id="usernameNotValid"> please enter a valid username </span>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="email1" placeholder="Email" name="email"  />
  
            </div>
            <span id="emailNotValid1" class="email-notvalid"> please enter a valid email </span>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="password1" placeholder="Password" name="password" />


            </div>
            <span id="emptyfield1" class="emptyfield"> please fill all the fields</span>
            <span id="passwordLength1" class="password-length"> !! Password should be at least 8 characters</span>


            <input type="submit" value="Sign Up" class="mybtn" />

            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon2">
                <i class="fab fa-facebook-f"></i>
              </a>
              
              <a href="#" class="social-icon2">
                <i class="fab fa-google"></i>
              </a>
           
            </div>
          </form>
        </div>
      </div>
      <div class="panels-container">

        <div class="panel left-panel">
            <div class="content">
                <h3>New At Navigi?</h3>
                <p>Create your NAVIGI account to explore facinating job opportunities</p>
                <button class="mybtn transparent" id="sign-up-btn">Sign Up</button>
            </div>
            <object type="image/svg+xml" data="" class="image" alt="person looks for a job"> </object>

        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>One of us?</h3>
                <p>Login to your NAVIGI account to explore facinating job opportunities </p>
                <button class="mybtn transparent" id="sign-in-btn">Sign In</button>
            </div>
            <object type="image/svg+xml" data="" class="image" alt=""> </object>
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>

    <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
  ></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>
  </body>
</html>