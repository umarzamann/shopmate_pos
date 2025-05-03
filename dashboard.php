<?php 
include('modals/modal_dummy.php'); 
include('modals/modal_add_user.php'); 
include('modals/modal_view_user.php'); 
include('modals/modal_delete_user.php'); 
include('modals/modal_inventory_card.php'); 
include('modals/modal_message.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Dashboard - ShopMate</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="CSS/style.css">


</head>
<body class="dashboard-pg d-flex">
    <div class="sidebar bg-black text-warning vh-100 p-3 ">
         <div class="db-logo d-flex align-items-center gap-3">
            <img src="img/logo.png" alt="POS Logo" class="rounded-circle" width="50">
            <h2 class="text-center">ShopMate</h2>
        </div> 
        
        <ul class="list-unstyled pt-4">
            <li class="p-2">Dashboard</li>
            <li class="dropdown p-2">
                <a class="dropdown-arrow-right dropdown-toggle text-warning text-decoration-none" href="#" data-bs-toggle="dropdown">Admin Panel</a>
                <ul class="dropdown-menu bg-black golden-shadow border-0">
                    <li><a class="dropdown-item text-warning" href="#" onclick="openModal('View Sales Reports')">View Sales Reports</a></li>
                    <li><a class="dropdown-item text-warning" href="#" onclick="openModal('Set Product Prices')">Set Product Prices</a></li>
                    <li><a class="dropdown-item text-warning" href="#" onclick="openModal('Manage Receipts')">Manage Receipts</a></li>
                </ul>
            </li>

            <li class="dropdown p-2">
                <a class="dropdown-arrow-right dropdown-toggle text-warning text-decoration-none" href="#" data-bs-toggle="dropdown">Manage Users</a>
                <ul class="dropdown-menu bg-black golden-shadow border-0">
                    <li><a class="dropdown-item text-warning" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Add New User</a></li>
                    <li><a class="dropdown-item text-warning" href="#" data-bs-toggle="modal" data-bs-target="#userTableModal" >View User Details</a></li>
                    <li><a class="dropdown-item text-warning" href="#" data-bs-toggle="modal" data-bs-target="#blockUserTableModal">Remove User</a></li>
                </ul>
            </li>
    
            <li class="dropdown p-2">
                <a class=" dropdown-arrow-right dropdown-toggle text-warning text-decoration-none" href="#" data-bs-toggle="dropdown">Billing</a>
                <ul class="dropdown-menu bg-black golden-shadow border-0">
                    <li><a class="dropdown-item text-warning" href="#">Create Invoice</a></li>
                    <li><a class="dropdown-item text-warning" href="#">View Invoice</a></li>
                </ul>
            </li>
        </ul>
    </div>
    
    <div class="flex-grow-1  bg-img">

        <div class="top-bar bg-warning text-dark p-3 d-flex justify-content-between align-items-center">
            <h1>Dashboard Page</h1>

            <div class="d-flex align-items-center gap-3">
                <button id="themeToggle" class="btn btn-outline-dark">☀️</button>
                <label for="colorPicker">Pick Background Color:</label>
                <input type="color" id="colorPicker" value="#000000">
            </div> 
                <div class="dropdown">
                    <a class="d-flex align-items-center text-decoration-none dropdown-toggle text-dark " href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">                          
                        <img src="img/logo.png" alt="User" class="rounded-circle me-2" width="40" height="40">                    
                        <div class="d-flex flex-column lh-sm">
                            <span class="fw-bold text-black ">Umar</span>
                            <span class="d-block text-muted small">Admin</span>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end bg-black golden-shadow border-0" aria-labelledby="accountDropdown">
                        <li><a class="dropdown-item text-warning" href="#">Account Settings</a></li>
                        <li><a class="dropdown-item text-danger" href="index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        
            <div class="container py-5">
                <div class="row g-4 ">
                    <!-- User Profile Card -->
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm border-0 h-100" id="userProfile">
                            <div class="card-body">
                                <i class="bi bi-person-circle fs-1 mb-3"></i>
                                <h5 class="card-title">User Profile</h5>
                            </div>
                        </div>
                    </div>
            
                    <!-- Inventory Card with Modal -->
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm border-0 h-100" id="inventoryCard">
                            <div class="card-body">
                                <i class="bi bi-box fs-1 mb-3"></i>
                                <h5 class="card-title">Inventory</h5>
                            </div>
                        </div>
                    </div>
            
                    <!-- Supplier Card -->
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm border-0 h-100" id="supplierCard">
                            <div class="card-body">
                                <i class="bi bi-person-bounding-box fs-1 mb-3"></i>
                                <h5 class="card-title">Supplier</h5>
                            </div>
                        </div>
                    </div>
            
                    <!-- POS Card -->
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm border-0 h-100" id="posCard">
                            <div class="card-body">
                                <i class="bi bi-cart fs-1 mb-3"></i>
                                <h5 class="card-title">POS</h5>
                            </div>
                        </div>
                    </div>
            
                    <!-- Reports Card -->
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm border-0 h-100" id="reportsCard">
                            <div class="card-body">
                                <i class="bi bi-bar-chart-line fs-1 mb-3"></i>
                                <h5 class="card-title">Reports</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>

    <script>
            $(document).ready(function(){
        // Open modal when clicking on Inventory card
        $('#inventoryCard').click(function() {
            $('#inventoryModal').modal('show');
        });
    
        
        $('#userProfile').click(function() {
            alert("User Profile Clicked");
        });
    
        $('#supplierCard').click(function() {
            alert("Supplier Clicked");
        });
    
        $('#posCard').click(function() {
            alert("POS Clicked");
        });
    
        $('#reportsCard').click(function() {
            alert("Reports Clicked");
        });
      });

      //showing user added message via AJAX
        $(document).ready(function () {
        $("#signupForm").submit(function (e) {
          e.preventDefault(); 

          $.ajax({
            url: "save_user.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
              $("#staticBackdrop").modal("hide"); // hide signup modal
              $("#responseMessage").text(response); // set message text
              $("#responseModal").modal("show"); // show the response modal
            },
            error: function () {
              $("#staticBackdrop").modal("hide");
              $("#responseMessage").text("Something went wrong.");
              $("#responseModal").modal("show");
            }
          });
        });
      }); 
    </script>
      </body>
</html>
