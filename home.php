<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Catagory</title>
</head>
<body>



  <ul>
  <li><a class="active" href="login.php">Logout</a></li>
  <li><a href="aboutus.php">About-Us</a></li>
  <li><a href="catagory.php">Catagory</a></li>
</ul>

<section>
  <table>
    <h2>Activity</h2>
    <h4><button id="btnAddActivity" class="add" name="add_activity" onclick="addActivityForm()">Add Activity</button></h4>

  <div class="bg-form">
    <div class="addFormContent">
      <div class="close">+</div>

      <form>
        <lable id="addActivityTitle">Add Activity</lable>
        <lable>Activity Name:</lable>
        <input type="text" id="activityName" placeholder="Activity Name">

        <lable>Discription:</lable>
        <input type="textfield" id="activityDiscription">          
        
        <label for="actiityStart">Date:</label>
        <input type="date" id="date" min="2000-01-01" max="2100-12-31" require>

        <label>Duration:</label>
        <div class="inline-input">
        <label>Hours:</label>          
          <input class="time" type="number" name="hours" id="hour" min="0" placeholder="Hours">
          <label>Minutes:</label>
          <input class="time" type="number" id="minute" min="0" max="60" placeholder="Minutes">
        </div>
        
        <button class="button" id="btnSubmit">Submit</button>
      </form>
    </div>
  </div>

  <tr>
    <th>Activity Name</th>
    <th>Discription</th>
    <th>Duration</th>
    <th>Date</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>Dance</td>
    <td>Hip hop</td>
    <td>5min</td>
    <td>20/01/2020</td>
    <td>
      <button class="btnedit" name="btn_edit">Edit</button>  
      <button class="btndelete" name="btn_delete">Delete</button>
    </td>
  </tr>
</table>
</section>
  

<footer>
  <p>Created 2020</p>
</footer>

<script>
  document.getElementById('btnAddActivity').addEventListener('click',function (){
    document.querySelector('.bg-form').style.display = 'flex';
  });

  document.querySelector('.close').addEventListener('click', function () {
    document.querySelector('.bg-form').style.display = 'none';
  });

</script>


</body>
</html>


