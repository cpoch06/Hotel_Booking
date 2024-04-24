<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>THE HAVANN</title>
  <link rel="stylesheet" href="style/style.css" />
  <link rel="stylesheet" href="style/about.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
  <!--Header Layout-->
  <?php

  include('layout/header.php');
  ?>
  <!--End of header layour-->

  <!--About content-->
  <div class="about-content">
    <div class="about-img">
      <img src="img/pexels-photo-1591361.jpeg" alt="about" />
    </div>
    <div class="about-text">
      <h3>Your dream place to spend your holiday!</h3>
      <h2>Welcome to THE HAVANN</h2>
    </div>
  </div>
  </section>
  <section class="about-body">
    <div class="about-body-history">
      <h3>How was HAVAAN built?</h3>
      <h4>
        THE HAVAAN was built by a group of 3 students from the same college.
      </h4>
      <h4>
        First, THE HAVAAN was just a small guest house near the beach at
        KAMPOT province in 2025.
      </h4>
      <h4>
        After many years, this group of people found the new idea to create a
        resort and boutigue.
      </h4>
      <h4>
        THE HAVAAN was rebuilt in 2029 and It has become one of the most
        beautiful Hotel and resort in KAMPOT province.
      </h4>
    </div>
    <div class="about-body-img">
      <img class="history" src="img/history.jpg" alt="" />
    </div>
  </section>
  <section class="founder">
    <h1 style="font-size: 2rem; margin-top: 20px;">The Founder</h1>
    <div class="ceo-img">
      <div class="ceo1">
        <img src="img/ceo1.jpg" alt="" />
        <h3>Mr. Davidson</h3>
      </div>
      <div class="ceo2">
        <img src="img/ceo2.jpg" alt="" />
        <h3>Mr. Lupez</h3>
      </div>
      <div class="ceo3">
        <img src="img/ceo3.jpg" alt="" />
        <h3>Mr. Abraham</h3>
      </div>
    </div>
  </section>
  <section class="location">
    <h2>To reach us</h2>
    <div class="location-content">
      <div class="location-img">
        <img src="img/map.jpg" alt="" />
      </div>
      <div class="instruction">
        <h4>1KM from kampot bride.</h4>
        <h4>Straight travel from the bridge along the river.</h4>
        <h4>3km from the durian road circle.</h4>
        <ul class="map-link">
          https://maps.app.goo.gl/UMEBMSsniZJSYX869
        </ul>
      </div>
    </div>
  </section>
  <!--End of about-->

  <!--Footer Layout-->
  <?php

  include('layout/footer.php');
  ?>
  <!--End of footer layout-->

</body>

</html>