    
<?php
require_once('views/header.php');
require_once('db/conn.php');
global $conn;
require_once('db/fetch-data.php');
$Catresult=fetch_category_data();

?>
  <div class="add-category">
    <h4>Add category</h4>
    <form method="post">
      <div class="row">
        <div class="col-md-6">

          <label for="name" class="col-sm-4 col-form-label">Name</label>
          <div class="col-sm-6">
            <input type="text"  class="form-control" id="name">
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Add</button> 
          </div>
        </div>
       
      </div>
    </form>
  </div>
  

  <div class="category-listing">
    <h4>Categories</h4>
    <table id="categories" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if(!empty($Catresult)) {?>
        <?php for($i=0;$i<count($Catresult);$i++): ?>
            <tr id="<?php echo $Catresult[$i]['id'];?> ">
            
                <td><?=$Catresult[$i]['name'] ?></td>
                <td><button type="button" class="btn btn-xs btn-primary editBtn" name="editBtn" data-toggle="modal" id="editBtn" data-target="#editModel" >Edit</button> 
                <button type="button" data-toggle="modal" id="deleteBtn" data-target="#exampleModal" class="btn btn-xs btn-danger deleteBtn">Delete</button>
                <!-- Button trigger modal -->


                </td>
            </tr>
        <?php endfor; ?>
        <?php } ?>
        </tbody>
        <tfoot>
            <tr>
              <th>Name</th>
              <th>Actions</th>
            </tr>
        </tfoot>
    </table>
  </div>

  

<?php require_once('views/footer.php')  ?>






