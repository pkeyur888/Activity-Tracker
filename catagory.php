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
  <li><a href="Home.php">Activity</a></li>
  <li><a href="aboutus.php">About</a></li>
</ul>

<section>
  <table>
  <h2>Catagory</h2>
  <h4><button id="btnAddCatagory" class="add" name="add_catagory"
  onclick="addCatagoryForm()" >Add Catagory</button></h4>
  
  
  <div class="bg-form">
    <div class="addFormContent">
      <div class="close">+</div>

      <form>
        <lable id="addActivityTitle">Add Catagory</lable>
        <lable>Catagory Name:</lable>
        <input type="text" id="CatagoryName" placeholder="Catagory Name">

        <button class="button" id="btnSubmit">Submit</button>
      </form>
    </div>
  </div>

  <tr>
    <th>Catagory Name</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <tr>
    <td>Shopping</td>
    <td><button class="btnedit" name="btn_edit">Edit</button></td>
    <td><button class="btndelete" name="btn_delete">Delete</button></td>
  </tr>
</table>
</section>
  

<footer>
  <p>Created 2020</p>
</footer>


<script>
  document.getElementById('btnAddCatagory').addEventListener('click',function (){
    document.querySelector('.bg-form').style.display = 'flex';
  });

  document.querySelector('.close').addEventListener('click', function () {
    document.querySelector('.bg-form').style.display = 'none';
  });

</script>



</body>
</html>