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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <!--Header Layout-->
  <?php

  include('layout/header.php');
  ?>
  <!--End of header layour-->

  <!--Price content-->
  <section class="booking-content">
    <!--Price Start-->

    <div class="booking-container">
      <h2>Services provided for customer </h2>
      <div class="row">
        <div class="col">
          <figure class="figure">
            <img src="img/gym.jpg" class="img-thumbnail" alt="">
            <figcaption class="figcaption" style="margin-top: 40px;">Fitness Center <br>

            </figcaption>
          </figure>
        </div>

        <div class="col">
          <figure class="figure">
            <img src="img/sauna.jpg" class="img-thumbnail" alt="">
            <figcaption class="figcaption" style="margin-top: 40px;">Sauna Room <br>

            </figcaption>
          </figure>
        </div>

        <div class="col">
          <figure class="figure">
            <img src="img/OIG (3).jpg" class="img-thumbnail" alt="">
            <figcaption class="figcaption" style="margin-top: 40px;">Swimming Pool <br>

            </figcaption>
          </figure>
        </div>

      </div>

      <div class="row">
        <div class="col">
          <figure class="figure">
            <img src="img/massage.jpg" class="img-thumbnail" alt="">
            <figcaption class="figcaption" style="margin-top: 40px;">Massage Service<br>

            </figcaption>
          </figure>
        </div>

        <div class="col">
          <figure class="figure">
            <img src="img/breakfast.jpg" class="img-thumbnail" alt="">
            <figcaption class="figcaption" style="margin-top: 40px;">Breakfast Buffet<br>

            </figcaption>
          </figure>
        </div>

        <div class="col">
          <figure class="figure">
            <img src="img/in-room-dining.jpg" class="img-thumbnail" alt="">
            <figcaption class="figcaption" style="margin-top: 40px;">Room Service<br>

            </figcaption>
          </figure>
        </div>

      </div>

    </div>

  </section>
  <!--End of price content-->

  <!--Footer Layout-->
  <?php

  include('layout/footer.php');
  ?>
  <!--End of footer layout-->
</body>

</html>