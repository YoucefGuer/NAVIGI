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
    </div>

    
    <section class="information_section">
      <div class="information_container container ">
        <div class="row">
          <div class="col-md-7">
            <div class="detail-box">
              <h2>
               Set your profile
              </h2>
              
              <p> fill the form below and be one of NAVIGI WORKERS so you can get the full experience in our website and get hired by people from all the country </p>
             
            </div>
          </div>
          <div class="col-md-5">
            <div class="img-box">
              <img src="navigi-images/complete_ur_profile.svg" alt="complete your profile" />
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- worker profile  -->
  <div class=" information_container container mt-5 mb-5"> 
    <form action="http://localhost/NAVIGI-FINAL/php/worker.php"  method="POST" enctype="multipart/form-data" onclick="return validateForm()">
    <div class="row ">

      <div class="col-md-6 mt-2">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="m-2 form-control" id="FirstName" name="firstName" />
        <span class="errorMessage" id="FirstNameError"></span>
      </div>

      <div class="col-md-6 mt-2">
        <label for="last_name" class="form-label" >Last Name</label>
        <input type="text" class=" m-2 form-control" id="LastName" name="lastName" />
        <span class="errorMessage" id="LastNameError"></span>
      </div>

      <div class="col-12 mt-2">
        <label for="inputAddress" class="form-label" >Address</label>
        <input type="text" class="form-control m-2" name="address" id="Address" placeholder="1234 Main St"/>
        <span class="errorMessage" id="AddressError"></span>
      </div>
      
      
      <div class="col-md-6 mt-2" >
        <label for="inputwilaya" class="form-label" >wilaya</label>
        <input type="text" class="form-control m-2" name="wilaya" id="Wilaya" />
        <span class="errorMessage" id="WilayaError"></span>
      </div>

      <div class="col-md-6 mt-2">
        <label for="inputCity" class="form-label" >city</label>
        <input type="text" class="form-control m-2"name="city" id="City" />
        <span class="errorMessage" id="CityError"></span>
      </div>


      <div class="col-md-6 mt-2" >
        <label for="inputage" class="form-label" >age</label>
        <input type="text" class="form-control m-2" name="age" id="age" />
        <span class="errorMessage" id="ageError"></span>
      </div>

      <div class="col-md-6 mt-2">
        <label for="inputPhone" class="form-label" >phone</label>
          <input type="text" class="form-control m-2" name="phone" id="Phone" />
        <span class="errorMessage" id="PhoneError"></span>
      </div>




      <div class="col-md-6 mt-2" >
        <label for="file" class="form-labe" >image</label>
        <div>
          <input type="file" class="m-2" id="profile_image" accept="image/png, image/jpeg, image/jpg" name="image"/>
        </div>
      </div>

      <div class="col-md-6 mt-2">
        <label for="inputCity" class="form-label">category</label>
        <select name="category" id="category" class="form-control m-2">
          <option value="plumber">plumber</option>
          <option value="electrician">electrician</option>
          <option value="carpenter">carpenter</option>
          <option value="painter">painter</option>
          <option value="gardener">gardener</option>
          <option value="cleaner">cleaner</option>
          <option value="mason">mason</option>
          <option value="welder">welder</option>
          <option value="mechanic">mechanic</option>
          <option value="technician">technician</option>
          <option value="other">other</option>
        </select>
      </div>

      <div class="col-12 mt-2">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="CheckBox" />
          <label class="form-check-label" for="gridCheck"> I accept the user guidlines </label>
          <span class="errorMessage" id="CheckBoxError"></span>
        </div>
      </div>

      <div class="col-12 mt-2">
        <button type="submit" class="btn btn-primary" >Join</button>
      </div>
    </div>
  </form>
</div>
    <!--  end worker profile  -->


    <?php include 'mainPartsCode/footer.php'; ?>

  <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/check.js"></script>
  
  </body>
</html>
