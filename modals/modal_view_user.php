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
include(__DIR__ . '/../includes/db.php');

         $sql = "SELECT * FROM users JOIN user_type WHERE users.u_role = user_type.tid";
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
              <td><?php echo $row['type_name'] ?></td>
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