<?php $pageTitle = "Dashboard";
include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/topbar.php'); ?>

<div class="container py-5">
    <div class="row g-4">
    
      <!-- User Profile Card -->
        <div class="col-md-4">
            <div class="card custom-card text-center shadow-sm border-0 h-100" id="userProfile">
                <div class="card-body">
                    <i class="bi bi-person-circle fs-1 mb-3"></i>
                    <h5 class="card-title">User Profile</h5>
                </div>
            </div>
        </div>
                
    <!-- Inventory Card with Modal -->
        <div class="col-md-4">
            <div class="card custom-card text-center shadow-sm border-0 h-100" id="inventoryCard">
                <div class="card-body">
                    <i class="bi bi-box fs-1 mb-3"></i>
                    <h5 class="card-title">Inventory</h5>
                </div>
            </div>
        </div>
            
                <!-- Supplier Card -->
                    <div class="col-md-4">
                        <div class="card custom-card text-center shadow-sm border-0 h-100" id="supplierCard">
                            <div class="card-body">
                                <i class="bi bi-person-bounding-box fs-1 mb-3"></i>
                                <h5 class="card-title">Supplier</h5>
                            </div>
                        </div>
                    </div>
            
                <!-- POS Card -->
                    <div class="col-md-4">
                        <div class="card custom-card text-center shadow-sm border-0 h-100" id="posCard">
                            <div class="card-body">
                                <i class="bi bi-cart fs-1 mb-3"></i>
                                <h5 class="card-title">POS</h5>
                            </div>
                        </div>
                    </div>
            
                <!-- Reports Card -->
                    <div class="col-md-4">
                        <div class="card custom-card text-center shadow-sm border-0 h-100" id="reportsCard">
                            <div class="card-body">
                                <i class="bi bi-bar-chart-line fs-1 mb-3"></i>
                                <h5 class="card-title">Reports</h5>
                            </div>
                        </div>
                    </div>
                </div>  
</div>

<?php include('includes/footer.php'); ?>