<?php
session_start();
if(isset($_GET['action'])){
  session_unset();
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ShopMate - Sign In</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style.css"/>

  <style>
  input:valid {
    border: 2px solid green;
  }
      
  input:invalid {
    border: 2px solid red;
  }
    input:focus {
    outline: none;
  }

  </style>
</head>
<body class="d-flex align-items-center justify-content-center bg-img vh-100">

  <div class="container text-center">
    <div class="mb-4">
      <img src="img/logo.png" alt="POS Logo" class="img-fluid rounded-circle golden-shadow animate-logo" style="width: 150px;">
      <h1 class="mt-2">Where Transactions Meet Innovation</h1>
    </div>
    <h1 class="border border-warning d-inline-block px-3 rounded golden-shadow text-uppercase">ShopMate POS System</h1>
      <div class="row justify-content-center">
        <div class="col-md-6 golden-shadow bg-blur-10 p-4 rounded-3 bg-dark bg-opacity-50">
          <img src="img/logo.png" alt="POS Logo" class="img-fluid rounded-circle mb-3" style="width: 120px;">
          <h2>Login</h2>

        <form id="loginForm" action="login_backend.php" method="POST">
            <select id="role" name="role" class="form-select mb-3" >
              <option value="" disabled selected>---Select---</option>

              <?php

                include('includes/db.php');

                $sql = "SELECT * FROM user_type";
                $result = mysqli_query($conn, $sql) or die("Query failed");
                
                if(mysqli_num_rows($result) > 0) {
                  while($rows = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$rows['tid']}'>{$rows['type_name']}</option>";        
                  }
                }
            ?>
              </select>

            <input type="text" class="form-control mb-3" 
                   id="username" name="username"  
                   placeholder="Username" >

            <input type="password" class="form-control mb-3" 
                   id="password" name="password"  
                   placeholder="Password" >
           
            <button type="submit" class="btn btn-gold fw-bold btn-scale text-black">Login</button>
          </form>
           <div>
            <?php
            if(isset($_SESSION['my_msg'])){ ?>
           <span style="color:red;"><?= $_SESSION['my_msg']; ?></span>
        <?php    }
            ?>
           </div>
        </div>
      </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>  
      // document.getElementById("loginForm").addEventListener("submit", function(e) {
      //   e.preventDefault();
      //   window.location.href = "dashboard.php";
      // });
  </script>
</body>
</html>
