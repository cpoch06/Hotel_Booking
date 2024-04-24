<section class="header">
  <div class="top-bar">
    <div class="logo-header">
      <img src="img/logo.jpg" alt="logo" />
    </div>
    <nav class="nav-header">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="price.php">Price</a></li>
        <li><a href="review.php">Review</a></li>
        <li><a href="service.php">Service</a></li>
        <li><a href="contact.php">Contact Information</a></li>

        <?php
        if (isset($_SESSION["is_login"]) && $_SESSION["is_login"] == "yes") {
          ?>

          <li><a href="logout.php">Log Out</a></li>

        <?php
        } else {

          ?>
          <li><a href="login.php">Log In</a></li>


          <?php
        }
        ?>


      </ul>
    </nav>
  </div>
</section>