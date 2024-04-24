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
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css?v900">
  <link rel="stylesheet" href="style/form.css">
</head>

<body>

  <?php

  include('layout/header.php');
  ?>

  <main>
    <form action="process-form.php" class="form-body" name="Form" method="post">
      <h1>Booking Form</h1>

      <!-- Name -->

      <div class="section">
        <label for="name">Full Name</label>
        <input type="text" class="name" name="txt_username">
      </div>

      <!-- Age -->

      <div class="section">
        <label for="age">Age</label>
        <input type="text" class="age" name="txt_age">
      </div>


      <!-- Email -->

      <div class="section">
        <label for="email">Email</label>
        <p id="email-error" class="error-message"></p>
        <p id="email"></p>
        <input type="text" class="email" name="txt_email">
      </div>
      </div>

      <!-- Room Type -->

      <div class="section">
        <label for="room-type">Room Type</label>
        <select name="txt_room" class="room">
          <option value="select">------</option>
          <option value="single">Single</option>
          <option value="double">Double</option>
          <option value="king">King</option>
          <option value="queen">Queen</option>
          <option value="executive">Executive</option>
          <option value="presidential">Presedential</option>
        </select>
      </div>

      <!-- Check In Date -->
      
      <div class="section">
        <label for="check-in-date">Check In Date</label>
        <input type="date" class="check-in-date" name="txt_check_in_date">
      </div>
      </div>

      <input class="submit-buttom" type="submit" value="Send Message">
    </form>
  </main>

</body>

</html>