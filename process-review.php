<?php

// Include Database Connection
include("layout/db-connection.php");

// Check if the form has been submitted
if (isset($_POST['txt_fullname'])) {
  // Get the values from the form
  $fullname = $_POST['txt_fullname'];
  $date = $_POST['txt_date'];
  $rating = $_POST['txt_rating'];
  $comment = $_POST['txt_comment'];

  // Validate the name field
  if (empty($fullname)) {
    echo "Please enter your name.";
    exit();
  }

  // Validate the date field
  if (empty($date)) {
    echo "Please enter the date.";
    exit();
  }

  // Construct SQL query
  $sql_insert = "INSERT INTO `tbl_review` (`review_id`,`full_name`, `date`, `rating`, `comment`) 
  VALUES (NULL,
  '" . $fullname . "', 
  '" . $date . "', 
  " . $rating . ", 
  '" . $comment . "'
  );
  ";

  // Execute SQL Statement
  $q = mysqli_query($conn, $sql_insert);

}

// Check if the database returned anything
if ($q) {
  echo "Review has been added successfully.";
} else {
  echo "Error adding review.";
}

?>
<?php
if (!mysqli_error($conn)) {
  echo ('Data is added successfully');
  header("location: ./review.php");

} else {

  //die("Error inserting ....");
  echo mysqli_error();

}

?>