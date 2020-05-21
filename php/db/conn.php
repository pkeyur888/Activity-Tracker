
<?php
    global $conn;
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
$conn = mysqli_connect("127.0.0.1", "root", "", "activity_tracker");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>
