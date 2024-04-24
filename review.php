<?php
session_start();

// check are you login?
include("layout/check-login.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>THE HAVANN</title>
  <link rel="stylesheet" href="style/review.css?v900" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css?v900">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!--Header Layout-->
  <?php

  include('layout/header.php');
  ?>
  <!--End of header layour-->

  <div class="titlepage">
    <h2>Our Customer Comment</h2>
  </div>
  <section class="review-body">
    <div class="img1">
      <img src="img/profile1.webp" alt="">
      <h3>Adam</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo itaque libero, doloribus eveniet
        voluptas dolorum modi quidem dolore sunt earum, sequi nam impedit ullam,
        molestiae magni officiis aspernatur voluptatum animi.</p>
    </div>
    <div class="img2">
      <img src="img/profile2.jpg" alt="">
      <h3>Peter</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo itaque libero, doloribus eveniet
        voluptas dolorum modi quidem dolore sunt earum, sequi nam impedit ullam,
        molestiae magni officiis aspernatur voluptatum animi.</p>
    </div>
    <div class="img3">
      <img src="img/profile3.webp" alt="">
      <h3>Tiffany</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo itaque libero, doloribus eveniet
        voluptas dolorum modi quidem dolore sunt earum, sequi nam impedit ullam,
        molestiae magni officiis aspernatur voluptatum animi.</p>
    </div>
  </section>
  <!--end review comment-->
  <!--Form review-->
  <div class="titlepage">
    <h2>Give a Feedback</h2>
  </div>
  <div class="review-form">
    <form action="process-review.php" method="post">
      <div class="Mname">
        <label class="memberName" for="name">Full Name</label><br>
        <input class="memberNameBox" type="text" id="name" name="txt_fullname">
      </div>
      <br>
      <div class="date">
        <label class="date1" for="date">Date</label><br>
        <input class="dateBox" type="date" id="date" name="txt_date"><br>
      </div>
      <br>
      <br>
      <!--Rating the stars-->
      <div class="rate">
        <label for="rateInput" class="rateLabel">Rate</label>
        <input type="radio" id="star5" name="txt_rating" value="5" />
        <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="txt_rating" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="txt_rating" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="txt_rating" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="txt_rating" value="1" />
        <label for="star1" title="text">1 star</label>
      </div>
      <br>
      <!--Input the text-->
      <textarea class="message" type="text" id="message" name="txt_comment" required placeholder="Message"></textarea>
      <br>
      <!--submit buttom-->
      <input class="submit-buttom-review" type="submit" value="Send Message">
    </form>
  </div>
  <!--end form review-->

  <!--Footer Layout-->
  <?php

  include('layout/footer.php');
  ?>
  <!--End of footer layout-->
</body>

</html>