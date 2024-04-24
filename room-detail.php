<?php
// Include Database Connection
include("layout/db-connection.php");

// Get the room ID from price.php file
$room_id = $_GET['rm_id'];

// Select the room from the database
$sql = "SELECT * FROM tbl_rooms WHERE room_id = '$room_id'";

// Execute the SQL query
$result = mysqli_query($conn, $sql);

// Check if the database returned anything
if ($result === false) {
    die("Error executing query: " . mysqli_error($conn));
}

// Fetch the room from the database
$row = mysqli_fetch_assoc($result);

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

  <!--Room detial-->

  <div class="row" style="width: 75%; margin-top: 20px; text-align: center;"><h1>Room Detail</h1></div>
 
 <div class="row text-left" >
<?php 

// Check if the room exists
if ($row) {
?>

<div class="row row-detail">
<div class="col-2"><strong style="font-size: 1.8rem;"> Room Name:</strong></div>
<div class="col-3"><p><?php echo $row["room_name"] ?></p></div>
</div>

<div class="row row-detail">
<div class="col-2"><strong style="font-size: 1.8rem;">Room Type:</strong></div>
<div class="col-3"><p><?php echo $row["room_type"] ?></p></div>
</div>

<div class="row row-detail">
<div class="col-2"><strong style="font-size: 1.8rem;">Room Price:</strong></div>
<div class="col-3"><p><?php echo $row["room_price"]?></p></div>
</div>

<div class="row row-detail">
<div class="col-2"><strong style="font-size: 1.8rem;">Room Picture:</strong></div>
<div class="col-3"><img src="<?php echo $row['room_picture'] ?>" style="height: 250px; width: 400px"></div>
</div>

<div class="row row-detail">
<div class="col-2"><strong style="font-size: 1.8rem;">Room facility:</strong></div>
<div class="col-3"><p><?php echo $row["room_facility"] ?></p></div>
</div>

<div class="row row-detail">
<form action="form.php" class="form-info">
<input type="submit" value="Reserve / Book">
</form>

</div>

<?php
} else {
    echo "<p>Room not found.</p>";
}
?>
</div>


  <!--Footer Layout-->

  <?php

  include('layout/footer.php');
  ?>
  <!--End of footer layout-->
</body>

</html>
