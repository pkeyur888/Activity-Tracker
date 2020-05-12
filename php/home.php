    
<?php
require_once('views/header.php');

?>
  <div class="add-activity">
    <h4>Add activity</h4>
    <form>
      <div class="">
        <div class="col-md-6">

          <label for="name" class="col-sm-4 col-form-label">Name</label>
          <div class="col-sm-8">
            <input type="text"  class="form-control" id="name">
          </div>
          <div class="">
              <label for="date" class="col-sm-4 col-form-label mt-2">Date</label>
              <div class="col-sm-8 mt-2">
                <input type="date"  class="form-control" id="date">
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <label for="description" class="col-sm-4 col-form-label">Description</label>
          <div class="col-sm-8">
            <textarea class="form-control" id="description" rows="3"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <label for="hours" class="col-sm-4 col-form-label">Duration: </label>
          <div class="col-sm-8">
            <input type="text"  class="form-control" id="hours" placeholder="Hours"> 
          </div>
        </div>

        <div class="col-md-6">
          <div class="col-sm-8">
            <input type="text"  class="form-control" id="minutes" placeholder="Minutes"> 
          </div>
          <div class="col-sm-4">
            <button type="submit" class="btn btn-primary">Add</button> 
          </div>
          
        </div>
      </div>
    </form>
  </div>
  

  <div class="activity-listing">
    <h4>Activities</h4>
  <table id="example" class="display" style="width:100%">
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
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Act 1</td>
                <td>Description short...</td>
                <td>20/04/1995</td>
                <td>3h 35m</td>
                <td><button class="btn btn-xs btn-primary">Edit</button> <button class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
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






