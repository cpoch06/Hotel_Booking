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
      <h2>Different types of Rooms in our hotel</h2>
      <div class="row">
        <div class="col">
          <figure class="figure">
            <img src="img/OIG (6).jpg" class="img-thumbnail" alt="">
            <figcaption class="figcaption">Single-bed rooms <br>
              <a href="room-detail.php?rm_id=1"
                style=" margin-top: 10px; text-decoration: none; border-color:black; border-style:inset; color: white;">Details</a>

              <form action="form.php" class="booking-info">
                <input type="submit" value="Reserve / Book">
              </form>

            </figcaption>
          </figure>
        </div>

        <div class="col">
          <figure class="figure">
            <img src="img/twin-bedroom.jpg" class="img-thumbnail" alt="">
            <figcaption class="figcaption">Double-bed rooms<br>

              <a href="room-detail.php?rm_id=2"
                style=" margin-top: 10px; text-decoration: none; border-color:black; border-style:inset; color: white;">Details</a>

              <form action="form.php" class="booking-info">
                <input type="submit" value="Reserve / Book">
              </form>


            </figcaption>
          </figure>
        </div>

        <div class="col">
          <figure class="figure">
            <img src="img/Luxury.jpg" class="img-thumbnail" alt="">
            <figcaption class="figcaption">Suite / Executive Suites <br>

              <a href="room-detail.php?rm_id=3"
                style=" margin-top: 10px; text-decoration: none; border-color:black; border-style:inset; color: white;">Details</a>

              <form action="form.php" class="booking-info">
                <input type="submit" value="Reserve / Book">
              </form>

            </figcaption>
          </figure>
        </div>

      </div>

      <div class="row">
        <div class="col">
          <figure class="figure">
            <img src="img/OIG (7).jpg" class="img-thumbnail" alt="">
            <figcaption class="figcaption">King rooms<br>

              <a href="room-detail.php?rm_id=4"
                style=" margin-top: 10px; text-decoration: none; border-color:black; border-style:inset; color: white;">Details</a>

              <form action="form.php" class="booking-info">
                <input type="submit" value="Reserve / Book">
              </form>

            </figcaption>
          </figure>
        </div>

        <div class="col">
          <figure class="figure">
            <img src="img/Presedential.jpg" class="img-thumbnail" alt="">
            <figcaption class="figcaption">Presedential Suites<br>

              <a href="room-detail.php?rm_id=5"
                style=" margin-top: 10px; text-decoration: none; border-color:black; border-style:inset; color: white;">Details</a>

              <form action="form.php" class="booking-info">
                <input type="submit" value="Reserve / Book">
              </form>

            </figcaption>
          </figure>
        </div>

        <div class="col">
          <figure class="figure">
            <img src="img/Queen.jpg" class="img-thumbnail" alt="">
            <figcaption class="figcaption">Queen rooms <br>

              <a href="room-detail.php?rm_id=6"
                style=" margin-top: 10px; text-decoration: none; border-color:black; border-style:inset; color: white;">Details</a>

              <form action="form.php" class="booking-info">
                <input type="submit" value="Reserve / Book">
              </form>

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