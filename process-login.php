<?php
session_start();

// Include Database Connection
include("layout/db-connection.php");

// Build Query
$username = $_POST["txt_username"]; // get data from POST method
$password = $_POST["txt_password"];


//Construct SQL
$sql_compare = "SELECT * FROM `tbl_username` WHERE `username` = '" . $username . "' and `password` = md5('" . $password . "')";


// Execute SQL Statement
$q = mysqli_query($conn, $sql_compare);
header("location: ./home.php");

if (!mysqli_error($conn)) { // NOT Error

  $row = mysqli_fetch_assoc($q); // get one record

  if ($row["username"]) { // check an existing record.

    //   SUCCESSFUL ...
      echo "Password and Username is match! Hello Mr. ".$row ["username"];

    $_SESSION["username"] = $row["username"];
    $_SESSION["userid"] = $row["user_id"];
    $_SESSION["is_login"] = "yes"; //true

    header("location: ./home.php");


  } else {

    echo "Password is NOT MATCH.";
  }

} else { // Eror

  die("Error.");
}

?>