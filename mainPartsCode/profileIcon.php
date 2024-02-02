<li class="nav-item" id="login-nav">
              <div class="user_option">
                <?php if (!isset($_SESSION['user_id'])): ?>
                <a class="nav-link" href="login.php">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  Account</a>
            <?php endif; ?>
                
              </div>
            </li>
                  
            <?php if (isset($_SESSION['user_id'])): ?>
              <img src="uploads/default.png" alt="profile" class="user-pic" onclick="toggleMenu()">
            <?php endif; ?>
            <div class="drop-menu" id="SubMenu">
              <div class="sub-menu">
                <div class="user-info">
                  <img src= "uploads/default.png">
                  <!--display users name-->
                    <h2> <?= $_SESSION['username']; ?> </h2>
                </div>
                <hr>
                <a href="Wprofile.php" class="sub-menu-link">
                  <img src="navigi-images/profile.png" >
                  <p>Your Profile</p>
                  <span>></span>
                </a>
                <?php if ($_SESSION['is_worker'] == 1): ?>
                <a href="offer.php" class="sub-menu-link">
                  <img src="navigi-images/offer.png" >
                  <p>Offers</p>
                  <span>></span>
                </a>
                <?php endif; ?>
                <a href="php/logout.php" class="sub-menu-link">
                  <img src="navigi-images/logout.png" >
                  <p>Logout</p>
                  <span>></span>
                </a>
              </div>
            </div>

          </div>
        </nav>
      </header>