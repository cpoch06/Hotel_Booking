<?php
$host = "localhost"; // IP Server = 127.0.0.1 or localhost
$user = "root";
$password = "";
$db = "booking-website";

//open connection
$conn = mysqli_connect($host,$user,$password,$db);

if($conn) {

  //echo "Connection is successfully created...";

}else{
  die("Server is error ...");
}

?>