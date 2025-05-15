<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include('includes/db.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}


$user_id = $_SESSION['user_id'];

// Get updated data from the form
$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);


$sql = "UPDATE users SET full_name = '{$full_name}', username = '{$username}', email = '{$email}' WHERE uid = {$user_id}";
$result = mysqli_query($conn, $sql) or die("Check Query Unsuccessful");

if ($result) {
    $_SESSION['full_name'] = $full_name;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    header("location: dashboard.php?updated=true");
} else {
    die("Something went wrong try again: " . mysqli_error($conn));
}

?>
