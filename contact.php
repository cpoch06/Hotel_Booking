<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>THE HAVANN</title>
  <link rel="stylesheet" href="style/review.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="style/contact.css">
  <link rel="stylesheet" href="style/style.css">
  <script src="https://kit.fontawesome.com/58bae6ade3.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--Header Layout-->
  <?php

  include('layout/header.php');
  ?>
  <!--End of header layour-->

  <div class="contact-content">
    <div class="contact-img">
      <img src="img/contact.jpg" alt="about" />
    </div>
    <div class="contact-text">
      <div class="phone">
        <i class="fa-solid fa-phone"> 012 34 56 789</i>
      </div>
      <div class="facebook">
        <i class="fa-brands fa-facebook"> THE HAVAAN hotel</i>
      </div>
      <div class="instagram">
        <i class="fa-brands fa-instagram"> THE_HAVAAN_HOTEL</i>
      </div>
    </div>
  </div>


  <!--Footer Layout-->
  <?php

  include('layout/footer.php');
  ?>
  <!--End of footer layout-->
</body>

</html>