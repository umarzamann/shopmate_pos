<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>
<div class="sidebar bg-black text-warning vh-100 p-3">
    <div class="db-logo d-flex align-items-center gap-3">
        <img src="img/logo.png" alt="POS Logo" class="rounded-circle" width="50">
        <h2 class="text-center">ShopMate</h2>
    </div>

    <ul class="list-unstyled pt-4">
        <li class="p-2"><a class="text-decoration-none text-warning  d-block px-2 py-1 rounded hover-bg-light" href="dashboard.php">
            <i class="fas  fa-tachometer-alt me-2"></i>Dashboard</a></li>
        


        <li class="p-2"><a class="text-decoration-none text-warning  d-block px-2 py-1 rounded hover-bg-light" href="inventory_view.php">
           <i class="fas fa-boxes me-2"></i>Inventory</a></li>
<?php
if($_SESSION['user_id'] != 2 && $_SESSION['user_id'] != 3){
?>
        <li class="p-2">
            <a class="text-warning text-decoration-none d-block px-2 py-1 rounded hover-bg-light" href="view_users.php">
                <i class="fas fa-users-cog me-2"></i>Manage Users</a>
        </li>
        <?php } ?>
<?php
    if($_SESSION['user_id'] != 2 && $_SESSION['user_id'] != 3){
    ?>        
        <li class="dropdown p-2">
            <a class="dropdown-arrow-right dropdown-toggle text-warning text-decoration-none" href="#" data-bs-toggle="dropdown">
                Admin Panel
            </a>
            <ul class="dropdown-menu bg-black golden-shadow border-0">
                <li><a class="dropdown-item text-warning" href="#">View Sales Reports</a></li>
                <li><a class="dropdown-item text-warning" href="#">Set Product Prices</a></li>
                <li><a class="dropdown-item text-warning" href="#">Manage Receipts</a></li>
            </ul>
        </li>
   <?php } ?>        
        <li class="dropdown p-2">
            <a class="dropdown-arrow-right dropdown-toggle text-warning text-decoration-none" href="#" data-bs-toggle="dropdown">Billing</a>
            <ul class="dropdown-menu bg-black golden-shadow border-0">
                <li><a class="dropdown-item text-warning" href="#">Create Invoice</a></li>
                <li><a class="dropdown-item text-warning" href="#">View Invoice</a></li>
            </ul>
        </li>
    </ul>
</div>
