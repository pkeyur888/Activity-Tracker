    
<?php
require_once('views/header.php');
require_once('db/conn.php');
global $conn;
require_once('db/fetch-data.php');
$result=fetch_data();

?>
  <div class="add-activity">
    <h4>Add activity</h4>
    <form method="post" action="">
      <div class="">
        <div class="col-md-6">

          <label for="name" class="col-sm-4 col-form-label">Name</label>
          <div class="col-sm-8">
            <input type="text"  class="form-control" id="name" name="name" require>
          </div>
          <div class="">
              <label for="date" class="col-sm-4 col-form-label mt-2">Date</label>
              <div class="col-sm-8 mt-2">
                <input type="date"  class="form-control" id="date" name="date" require>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <label for="description" class="col-sm-4 col-form-label">Description</label>
          <div class="col-sm-8">
            <textarea class="form-control" id="description" rows="3" name="description" require></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <label for="hours" class="col-sm-4 col-form-label" >Duration: </label>
          <div class="col-sm-8">
            <input type="text"  class="form-control" id="hours" name="hours" placeholder="Hours" require> 
          </div>
        </div>

        <div class="col-md-6">
          <div class="col-sm-8">
            <input type="text"  class="form-control" id="minutes" name="minutes" placeholder="Minutes" require> 
          </div>
          <div class="col-sm-4">
            <input type="submit" value="Add" name="submit" class="btn btn-primary" > 
          </div>
          
        </div>
      </div>
    </form>
  </div>
  

  <div class="activity-listing">
    <h4>Activities</h4>
  <table id="activities" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Date</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        <?php for($i=0;$i<count($result);$i++): ?>
            <tr>
                <td><?=$result[$i]['name'] ?></td>
                <td><?=$result[$i]['description'] ?></td>
                <td><?=$result[$i]['date'] ?></td>
                <td><?=$result[$i]['duration'] ?></td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
        <?php endfor; ?>
            
            
        
            
        
        </tbody>
        <tfoot>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Date</th>
              <th>Duration</th>
              <th>Actions</th>
            </tr>
        </tfoot>
    </table>
  </div>

  

<?php require_once('views/footer.php')  ?>
<?php

if($_POST["submit"]){

        
$name=$_POST['name'];
$description=$_POST["description"];
$date=$_POST["date"];
$hours=$_POST["hours"];
$minutes=$_POST["minutes"];
$userid=1;
$categoryid=1;
$duration=$hours.'h '.$minutes.'m';



$sql = "INSERT INTO `activities`(`userId`, `categoryId`, `name`, `description`, `date`, `duration`) VALUES ($userid,$categoryid,'$name','$description','$date','$duration')";

//echo $sql;
if ($conn->query($sql) ) {
    echo "<script>alert('Data inserted')</script>";
    header("Location:home.php");
  } else {
    echo "<script>alert('Problem to insert data try after some time')</script>";
    header("Location:home.php");
  }


}