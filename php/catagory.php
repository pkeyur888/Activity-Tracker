    
<?php
require_once('views/header.php');

?>
  <div class="add-category">
    <h4>Add category</h4>
    <form>
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
            <tr>
                <td>Cat 1</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Cat 1</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Cat 1</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Cat 1</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Cat 1</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Cat 1</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Cat 1</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Cat 1</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
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






