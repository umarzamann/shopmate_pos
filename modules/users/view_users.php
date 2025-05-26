<?php $pageTitle = "Manage Users";
    include('includes/header.php');  
     ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/topbar.php'); ?>

<div class="container py-5">
<?php $crudTitle = "Users";
    include('includes/crud_nav.php'); ?>
    <?php 
    include('includes/db.php');

         $sql = "SELECT * FROM users JOIN user_type WHERE users.u_role = user_type.tid";
         $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

         if(mysqli_num_rows($result) > 0 ) {
         ?>
         <div class="bg-light p-4 rounded">
        <table class="table table-bordered table-striped table-hover">
          <thead class="table-warning text-center">
            <tr>
              <th>ID</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Username</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php

            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr class="text-center">
              <td><?php echo $row['uid'] ?></td>
              <td><?php echo $row['full_name'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['username'] ?></td>
              <td><?php echo $row['type_name'] ?></td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                <a class="btn  btn-scale btn-primary px-4" href='update_user.php?uid=<?php echo $row['uid']; ?>'>Edit</a>
                <span class="d-flex justify-content-center align-items-center text-muted fw-bold">|</span>
                  <a class="btn btn-scale btn-danger px-3" onclick="confirmDeletion(<?= $row['uid']; ?>)" >Delete</a>
                </div>  
            </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        </div>
        <?php } else {
          echo "<div class='bg-light p-4'><h2>No record found</h2></div>";
        }
    ?>
        
</div>
    

<?php include('includes/footer.php'); ?>