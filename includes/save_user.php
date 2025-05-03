<?php

include(__DIR__ . '/../includes/db.php');

$full_name = $_POST['name'];
$user_email = $_POST['email'];
$user_name = $_POST['username'];
$user_password = $_POST['password'];
$user_role = $_POST['user_role'];

$sql = "INSERT INTO users(full_name,email,username,u_password,u_role) VALUES ('{$full_name}','{$user_email}','{$user_name}','{$user_password}','{$user_role}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

if ($result) {
    echo "Signup successful!";  
} else {
    echo "Error: " . mysqli_error($conn); 
}

mysqli_close($conn);

?>