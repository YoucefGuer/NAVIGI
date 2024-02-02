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
                <li class="nav-item active">
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
  
    <br>
    <br>
    <!--about the team section-->
    <div class="container text-center py-5">
        <div class="heading_container heading_center">
            <h2>About NAVIGI's team</h2>
        </div>
        <h4 class="text-muted">Heeey.... Get to Know Our Amazing Team ;)</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            <div class="col">
              <div class="card">
                <img src="navigi-images/amine.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mohammed El Amine Kichah</h5>
                  <p class="card-text">2nd year student at Ensia <br> Full stack web developer.</p>
                </div>
                <div class="d-flex justify-content-evenly p-4">
                    <a class="bi bi-facebook" href="https://web.facebook.com/masteramine.kichah" target="_blank"></a>
                    <a class="bi bi-linkedin" herf="https://www.linkedin.com/in/mohammed-el-amine-kichah-89bab9232/" target="_blank"></a>
                    <a class="bi bi-envelope-fill" herf="mailto:mohammed.el.amine.kichah@ensia.edu.dz" target="_blank"></a>
                    <a class="bi bi-instagram" href="https://www.instagram.com/_.amine_.__/" target="_blank"></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="navigi-images/Youcef-guergour.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Guergour Youcef</h5>
                  <p class="card-text">2nd year student at Ensia <br> Front end developer.</p>
                </div>
                <div class="d-flex justify-content-evenly p-4">
                    <a class="bi bi-facebook" href="https://web.facebook.com/profile.php?id=100009743974195" target="_blank"></a>
                    <a class="bi bi-linkedin" href="https://web.facebook.com/profile.php?id=100009743974195" target="_blank"></a>
                    <a class="bi bi-envelope-fill" href="mailto:youcef.guergour@ensia.edu.dz" target="_blank"></a>
                    <a class="bi bi-instagram" href="https://www.instagram.com/youcef_guergour/" target="_blank"></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="navigi-images/Khalil.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Derafa Mohamed El Khalil</h5>
                  <p class="card-text">2nd year student at Ensia<br> UI/UX designer </p>
                </div>
                <div class="d-flex justify-content-evenly p-4">
                    <a class="bi bi-facebook" href="https://web.facebook.com/khalil.sukihero.56" target="_blank"></a>
                    <a class="bi bi-linkedin" href="https://www.linkedin.com/in/mohamed-el-khalil-derafa-803a45245/" target="_blank"></a>
                    <a class="bi bi-envelope-fill" href="mailto:mohamed.el.khalil.derafa@ensia.edu.dz" target="_blank"></a>
                    <a class="bi bi-instagram " href="https://www.instagram.com/_edward._.newgate_/" target="_blank"></a>
                </div>
              </div>
            </div>
         
          </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php include 'mainPartsCode/footer.php'; ?>
  
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>  
    </body>
    </html>