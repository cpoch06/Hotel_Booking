<?php

session_start();

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/login.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css?v900">
  <title>THE HAVAAN</title>
</head>

<body>

  <!--Header Layout-->
  <?php

  include('layout/header.php');
  ?>

  <div class="signin">
    <div class="content">
      <h2>Sign In</h2>
      <form action="process-login.php" method="post">
        <input class="name" type="text" id="name" name="txt_username" required placeholder="Username">
        <br>
        <br>
        <input class="password" type="password" id="password" name="txt_password" required placeholder="Password">
        <br>
        <br>
        <input class="submit" type="submit" value="Login">
      </form>
      <div class="log-footer">
        <h3>Don't have any account? <a href="signup.php">Sign up</a> here</h3>
      </div>
    </div>



</body>

</html>