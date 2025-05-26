<?php
session_start();    
include('includes/db.php');

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$user_role = mysqli_real_escape_string($conn, $_POST['role']);

if (empty($email) || empty($password) || empty($user_role)) {
    $msg="All fields are required";
    $_SESSION['my_msg'] = $msg;
    header("Location: index.php");
    exit();
}


$sql = "SELECT u.*,t.type_name FROM users u
join user_type t ON u.u_role = t.tid
 WHERE u.email = '{$email}' AND u.u_password = '{$password}' AND u.u_role = '{$user_role}' LIMIT 1";
$result = mysqli_query($conn, $sql) or die("Query failed");



if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['uid'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['user_role'] = $row['u_role'];
    $_SESSION['full_name'] = $row['full_name'];
     $_SESSION['type_name'] = $row['type_name'];
    $_SESSION['my_msg'] = '';
     $msg="You are logged In";
    header("Location: dashboard.php");
    exit();
} else {
    $msg="Invalid email, password, or role";
    $_SESSION['my_msg'] = $msg;
    header("Location: index.php");
    exit();
}
?>
