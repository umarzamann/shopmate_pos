<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<?php $pageTitle = "Edit Profile";
    include('includes/header.php');  
     ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/topbar.php'); ?>

<div class="container py-5">
<?php
include 'includes/db.php';

// checking if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT full_name, email, username FROM users WHERE `uid` = $user_id";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
?>
<div class="bg-light rounded p-4">
    <h2 class="text-center mb-4 fw-bold text-dark">Edit Profile</h2>
    <form class="post-form" action="user_update_profile.php" method="POST">
        
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-black">Full Name:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="full_name" value="<?php echo $row['full_name']; ?>" required>
            </div>            
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-black">Username:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" required>
            </div>            
        </div>         
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-black">Email:</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
            </div>            
        </div>      
    
        <div class="d-flex gap-3">
            <a href="dashboard.php" class="btn btn-scale btn-secondary text-uppercase px-4">Back</a>
            <input class="btn btn-success btn-scale text-uppercase px-4" type="submit" value="Update">
        </div>
    </form>
</div>
<?php }
}
?>    
</div>
<?php include('includes/footer.php'); ?>