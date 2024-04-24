<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signup.css">
    <link rel="stylesheet" href="style/style.css?v900">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <title>THE HAVAAN</title>
</head>

<body>

    <!--Header Layout-->
    <?php

    include('layout/header.php');
    ?>

    <div class="signup">
        <div class="content">
            <h2>Sign Up</h2>
            <form action="process-signup.php" method="post">
                <input class="name" type="text" id="name" name="txt_username" required placeholder="Username">
                <br>
                <br>
                <input class="password" type="password" id="password" name="txt_password" required
                    placeholder="Password">
                <br>
                <br>
                <input class="confirm_password" type="password" id="confirm_password" name="txt_confirm_password"
                    required placeholder="Confirm Password">
                <br>
                <br>
                <input class="submit" type="submit" value="Sign Up">
            </form>
        </div>
    </div>




</body>

</html>
</body>

</html>