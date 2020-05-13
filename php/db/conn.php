
<?php
    global $conn;
  session_start();
$conn = mysqli_connect("db:3306", "activitytrackeruser", "secret", "activitytrackerdb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>
