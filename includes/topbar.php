
<div class="flex-grow-1 bg-img">
    <div class="top-bar bg-warning text-dark p-3 d-flex align-items-center">
        <h1 class="m-0"><?php echo $pageTitle ?></h1>

        <div class="d-flex align-items-center gap-3 ms-auto">
            <button id="themeToggleBtn" class="btn border-0 bg-transparent">
                <i class="bi bi-sun-fill fs-4" id="themeIcon"></i>
            </button>

            <div class="dropdown">
                <a class="d-flex align-items-center text-decoration-none dropdown-toggle text-dark"
                   href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">                                            
                    <img src="img/logo.png" alt="User" class="rounded-circle me-2" width="40" height="40">                    
                    <div class="d-flex flex-column lh-sm">
                        <span id="userName" class="fw-bold text-black"><?= $_SESSION['username']; ?></span>
                        <span id="userRole" class="d-block text-muted small "><?= $_SESSION['type_name']; ?></span>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end bg-black golden-shadow border-0" aria-labelledby="accountDropdown">
                    <li><a class="dropdown-item text-warning" href="#">Account Settings</a></li>
                    <li><a class="dropdown-item text-danger" href="index.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div id="toast" class="toast"></div>