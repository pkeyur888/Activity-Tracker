
<?php
    global $conn;

$conn = mysqli_connect("localhost", "root", "", "activity_tracker");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>
