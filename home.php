<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>THE HAVANN</title>
  <link rel="stylesheet" href="style/style.css?v900" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
  <!--Header Layout-->
  <?php

  include('layout/header.php');
  ?>

  <!--End of header layour-->

  <!--Home-content-->
  <section class="header-content">
    <div class="content-img">
      <img class="content" src="img/OIG (1).jpg" alt="img" />
    </div>
    <div class="content-text">
      <h3 class="HAAVAN">HAAVAN is the heaven on earth</h2>
        <h2 class="hbs"> Hotel, Bar and Spar</h2>

        <form action="price.php">
          <input type="submit" value="Book Now" />
        </form>
    </div>
  </section>
  <!--End of home-content-->

  <!--Home body-->
  <section class="home-body">
    <div class="img1">
      <img src="img/OIG (7).jpg" alt="">
      <h3>Our Room</h3>
    </div>
    <div class="img2">
      <img src="img/OIG (3).jpg" alt="">
      <h3>Our Pool</h3>
    </div>
    <div class="img3">
      <img src="img/OIG.3JzNm1XhQCNq.jpg" alt="">
      <h3>Our Restaurant</h3>
    </div>

  </section>
  <!--End of Home Body-->

  <!--Footer Layout-->
  <?php

  include('layout/footer.php');
  ?>
  <!--End of footer layout-->

</body>

</html>