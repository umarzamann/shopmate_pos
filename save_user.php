<?php

include('includes/db.php');

$full_name = $_POST['name'];
$user_email = $_POST['email'];
$user_name = $_POST['username'];
$user_password = $_POST['password'];
$user_role = $_POST['user_role'];

$check_query = "SELECT * FROM users WHERE email = '{$user_email}' OR username='{$user_name}' LIMIT 1";
$check_result = mysqli_query($conn, $check_query) or die("Check Query Unsuccessful");

if (mysqli_num_rows($check_result) > 0) {
    echo "Email or username already exists";
}else {
    $sql = "INSERT INTO users(full_name,email,username,u_password,u_role) 
            VALUES ('{$full_name}','{$user_email}','{$user_name}','{$user_password}','{$user_role}')";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
    
    if ($result) {
        echo "success"; 
        // header("Location: http://localhost/shopmate_org_pagination/view_users.php");
    } else {
        die("Something went wrong try again: " . mysqli_error($conn));
    }
}

// header("Location: http://localhost/shopmate_org_pagination/view_users.php");


?>