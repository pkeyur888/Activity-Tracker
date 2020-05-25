<?php
require_once('conn.php');

    if(isset($_POST['edit'])){

        $name=$_POST['editName'];
        $date=$_POST['editDate'];
        $desc=$_POST['editDescription'];
        $duration=$_POST['editHours'].'h '.$_POST['editMinutes'].'m';
        $id=$_POST['edit-id'];
        echo $id;


        $sql = "UPDATE `activities` SET `categoryId`=1,`name`='$name',`description`='$desc',`date`='$date',`duration`='$duration' WHERE id=$id";
        echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('location:../home.php');
} else {
  echo "Error updating record: " . $conn->error;
  header('location:../home.php');
}

    }

?>

