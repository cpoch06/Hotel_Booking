<?php

// Include Database Connection
include("layout/db-connection.php");

// // Check database connection
// if (mysqli_connect_error()) {
//   die("Database connection failed: " . mysqli_connect_error());
// }
// echo "Database connection successful.";

$q = false; // Initialize $q

// Check if the form has been submitted
if (isset($_POST['txt_username'])) {
  // Get the values from the form
  $username = $_POST['txt_username'];
  $age = $_POST['txt_age'];
  $email = $_POST['txt_email'];
  $room = $_POST['txt_room'];
  $check_in_date = $_POST['txt_check_in_date'];

  // Validate the name field
  if (empty($username)) {
    echo "Please enter your name.";
    exit();
  }

  // Validate the email field
  if (empty($email)) {
    echo "Please enter your email.";
    exit();
  }

  // Validate the age field
  if (empty($age)) {
    echo "Please enter your age.";
    exit();
  }

  // Validate the room field
  if (empty($room)) {
    echo "Please enter your room.";
    exit();
  }

  // Validate the check-in-date field
  if (empty($check_in_date)) {
    echo "Please enter your check-in-date.";
    exit();
  }

  // Construct SQL query
  $sql_insert = "INSERT INTO `tbl_booking` (`booking_id`,`user_name`, `user_age`, `user_email`, `room_type`, `check_in_date`) 
VALUES (NULL,
'" . $username . "', 
" . $age . ", 
'" . $email . "', 
'" . $room . "',
'" . $check_in_date . "'
);
";

  // Execute SQL Statement
  $q = mysqli_query($conn, $sql_insert);
}


// Check if the database returned anything
if ($q) {
  echo ("Booking has been added successfully.");
} else {
  echo ("Error adding booking.");
}


?>
<?php
if (!mysqli_error($conn)) {
  echo ('Data is added successfully');
  header("location: ./form.php");

} else {

  //die("Error inserting ....");
  echo mysqli_error();

}

?>