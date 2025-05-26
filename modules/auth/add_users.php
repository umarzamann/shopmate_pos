<?php $pageTitle = "Manage Users";
    include('includes/header.php');  
     ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/topbar.php'); ?>

<div class="container py-5">
    <?php $crudTitle = "Add User";
    include('includes/crud_nav.php'); ?>    
    <div class="bg-light rounded p-4">
    <form class="post-form" id="signupForm" action="save_user.php'"  method="post">
        
                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label text-black">Full Name:</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                    </div>            
                </div>

                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label text-black">Email:</label>
                    <div class="col-sm-5">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label text-black">Usermane:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                </div>

                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label text-black">Password:</label>
                    <div class="col-sm-5">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
            </div>

                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label text-black">Confirm Password:</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="form-label col-sm-2 text-black ">Assign a Role:</label><br>
                    <div class="form-check form-check-inline ms-2 col-sm-1">
                        <input class="form-check-input" type="radio" name="user_role" id="admin" value="1" required>
                        <label class="form-check-label fw-bold text-dark" for="admin">Admin</label>
                    </div>
                    <div class="form-check form-check-inline col-sm-1">
                        <input class="form-check-input" type="radio" name="user_role" id="Manager" value="2">
                        <label class="form-check-label fw-bold text-dark" for="Manager">Manager</label>
                    </div>
                    <div class="form-check form-check-inline col-sm-2">
                        <input class="form-check-input" type="radio" name="user_role" id="salesman" value="3">
                        <label class="form-check-label fw-bold text-dark" for="salesman">Sales Man</label>
                    </div>                    
                </div>

        <div class="d-flex justify-content-center gap-5">
        <a href="view_users.php" class="btn btn-secondary btn-scale text-uppercase px-3">Close</a>
        <input class="btn btn-success btn-scale text-uppercase px-4" type="submit" value="Add">
        </div>
    </form>
    </div>
        
</div>
    

<?php include('includes/footer.php'); ?>