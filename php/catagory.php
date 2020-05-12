    
<?php
require_once('views/header.php');

?>

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

  

<?php require_once('views/footer.php')  ?>






