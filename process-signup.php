<?php

// Include Database Connection
include("layout/db-connection.php");

// Check if the form has been submitted
if (isset($_POST['txt_username'])) {
  // Get the values from the form
  $username = $_POST['txt_username'];
  $password = $_POST['txt_password'];
  $confirm_password = $_POST['txt_confirm_password'];


  // Validate the name field
  if (empty($username)) {
    echo "Please enter your name.";
    exit();
  }

  // Validate the passwordfield
  if (empty($password)) {
    echo "Please enter the password.";
    exit();
  }

  // Validate the passwordfield
  if (empty($confirm_password)) {
    echo "Please enter the password to confirm.";
    exit();
  }

  // Validate the passwordfield if it matches the confirm password
  if ($password != $confirm_password) {
    die("Password does match!");
  }

  // Construct SQL query
  $sql_insert = "INSERT INTO `tbl_username` (`user_id`,`username`, `password`) 
        VALUES (NULL, 
            '" . $username . "', 
            MD5('" . $password . "')
        );
        ";

  // Execute SQL Statement
  $q = mysqli_query($conn, $sql_insert);
  header("location: ./login.php");
}

// Check if the database returned anything
if ($q) {
  echo "Account has been added successfully.";
} else {
  echo "Error adding Account.";
}

?>
<?php
if (!mysqli_error()) {
  // echo ('Data is added successfully');
  header("location: ./login.php");

} else {

  //die("Error inserting ....");
  echo mysqli_error();

}

?>