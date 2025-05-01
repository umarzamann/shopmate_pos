                <!-- Navbar Modal -->
                <div id="customModal" class="my-modal">
                    <div class="my-modal-content">
                      <span class="my-close" onclick="closeModal()">&times;</span>
                      <p id="modal-text">umar zaman</p>
                    </div>
                  </div>
    
    <!-- Bootstrap Modal for Inventory -->
    <div class="modal fade" id="inventoryModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-black text-center w-100 fw-bold" id="exampleModalToggleLabel">Inventory</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Action Buttons -->
              <div class="d-flex  flex-column gap-2 mb-4">
                <button class="btn btn-success flex-fill" data-bs-target="#exampleModalToggle2"  data-bs-toggle="modal" data-bs-dismiss="modal" >Add Item</button>
                <button class="btn btn-primary flex-fill">Update Item</button>
              </div>
              <!-- Inventory Summary -->
              <h6 class="text-success">Items in Inventory: <span class="badge bg-secondary">42</span></h6>
              <hr> 
                              
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModalToggle2" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-black fw-bold" id="exampleModalToggleLabel2">Add item</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Add Item Modal -->
              <form id="addItemForm">
                <div class="modal-body">
        
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label class="form-label">Item Name</label>
                      <input type="text" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Category</label>
                      <select class="form-select" required>
                        <option selected disabled>Choose category</option>
                        <option>Plate</option>
                        <option>Bowl</option>
                        <option>Mug</option>
                        <option>Glass</option>
                        <option>Cutlery</option>
                        <option>Set</option>
                      </select>
                    </div>
                  </div>
        
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label class="form-label">Brand / Manufacturer</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Item Code / SKU</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
        
                  <div class="row mb-3">
                    <div class="col-md-4">
                      <label class="form-label">Purchase Price</label>
                      <input type="number" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                      <label class="form-label">Selling Price</label>
                      <input type="number" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                      <label class="form-label">Quantity in Stock</label>
                      <input type="number" class="form-control" required>
                    </div>
                  </div>
        
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label class="form-label">Unit Type</label>
                      <select class="form-select">
                        <option>Pieces</option>
                        <option>Sets</option>
                        <option>Dozens</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Upload Image</label>
                      <input class="form-control" type="file" accept="image/*">
                    </div>
                  </div>
        
                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="3" placeholder="Optional..."></textarea>
                  </div>
        
                </div>
        
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Add Item</button>
                </div>
              </form>

            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" data-bs-target="#inventoryModal" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal for adding a new user -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <form id="signupForm" action="save_user.php" method="POST">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5 text-black" id="staticBackdropLabel">Add new user</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                              </div>

                              <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                              </div>

                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                              </div>

                              <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                              </div>

                              <div class="input-group mb-3">
                                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                              </div>

                              <!-- User Role Selection -->
                              <div class="mb-3">
                                <label class="form-label d-block text-dark fw-bold text-decoration-underline">Select Your Role:</label>
                                <div class="form-check form-check-inline text-dark ">
                                  <input class="form-check-input" type="radio" name="user_role" id="admin" value="admin" required>
                                  <label class="form-check-label" for="admin">Admin</label>
                                </div> <br>
                                <div class="form-check form-check-inline text-dark ">
                                  <input class="form-check-input" type="radio" name="user_role" id="receptionist" value="receptionist">
                                  <label class="form-check-label" for="receptionist">Receptionist</label>
                                </div>
                              </div>
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Sign Up</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>



<!-- Modal to show success or error message -->
<div class="modal fade" id="responseModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4">
      <div class="modal-body">
        <h5 id="responseMessage" class="mb-3 fw-bold text-dark"></h5>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal to View USERS -->
<div class="modal fade" id="userTableModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="userTableModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold text-dark" id="userTableModalLabel">Users List</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Table to display data -->
         <?php 
         include('db.php');

         $sql = "SELECT * FROM users";
         $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

         if(mysqli_num_rows($result) > 0 ) {
         ?>
        <table class="table table-bordered table-striped table-hover">
          <thead class="table-warning text-center">
            <tr>
              
              <th>Full Name</th>
              <th>Email</th>
              <th>Username</th>
              <th>User Role</th>
            </tr>
          </thead>
          <tbody>
            <?php

            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
              <td><?php echo $row['full_name'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['username'] ?></td>
              <td><?php echo $row['u_role'] ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <?php } else {
          echo "<h2>No record found</h2>";
        }
        mysqli_close($conn); 
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal to Delete USERS -->
<div class="modal fade" id="blockUserTableModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="userTableModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold text-dark" id="userTableModalLabel">Users List</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Table to display data -->
         <?php 
         include('db.php');

         $sql = "SELECT * FROM users";
         $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

         if(mysqli_num_rows($result) > 0 ) {
         ?>
        <table class="table table-bordered table-striped table-hover">
          <thead class="table-warning text-center">
            <tr>
              
              <th>Full Name</th>
              <th>Email</th>
              <th>Username</th>
              <th>User Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php

            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
              <td><?php echo $row['full_name'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['username'] ?></td>
              <td><?php echo $row['u_role'] ?></td>

              <td>
                    <a class="btn btn-info" href='delete_user.php?id=<?php echo $row['uid']; ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <?php } else {
          echo "<h2>No record found</h2>";
        }
        mysqli_close($conn); 
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>