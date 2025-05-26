<?php $pageTitle = "Manage Users";
    include('includes/header.php');  
     ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/topbar.php'); ?>

<div class="container py-5">
    <?php $crudTitle = "Update User information";
    include('includes/crud_nav.php'); ?>
<div class="bg-light p-4 rounded">

<div class="card shadow-sm border-0 mb-4">
    <div class="card-body">
        <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">    
                <div class="mb-3 row">
                    <label class="col-sm-1 col-form-label text-black">ID:</label>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="uid" required>
                            <input class="btn btn-scale btn-success mt-2 px-3" type="submit" name="showbtn" value="Show" />         
                        </div>   
                </div>
            </form>
    </div>        
    </div>

    <?php
          if(isset($_POST['showbtn'])){
       
    include 'includes/db.php';

    $u_id = $_POST['uid'];

    $sql = "SELECT * FROM users WHERE uid = {$u_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
                <form id="updateForm" class="post-form" action="sql_updatedata.php" method="post">
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label text-black">Full Name:</label>
                            <div class="col-sm-5">
                            <input type="hidden" name="uid" value="<?php echo $row['uid']; ?>"/>    
                            <input type="text" class="form-control" name="full_name" value="<?php echo $row['full_name']; ?>">
                            </div>            
                        </div>

                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label text-black">Email:</label>
                            <div class="col-sm-5">
                            <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label text-black">Usermane:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
                            </div>
                        </div>
                        <a href="view_users.php" class="btn btn-scale btn-secondary text-uppercase px-4">Back</a>
                        <input class="btn btn-scale btn-success text-uppercase px-4" type="submit" value="Update">
                </form>
        </div>
    </div>    
    <?php
      }
    } else {
        echo '<div class="alert alert-warning  mt-4" role="alert">
        <strong> No Record Found</strong> for ID: '. htmlspecialchars($u_id) . '
        </div>';
    }
} 
    ?>


</div>
        
</div>
    

<?php include('includes/footer.php'); ?>