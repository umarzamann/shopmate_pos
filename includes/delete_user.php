<?php

$user_id = $_GET['id'];

include(__DIR__ . '/../includes/db.php');

$sql = "DELETE FROM users WHERE uid = {$user_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

// echo "User Deleted";

header("Location: http://localhost/shopmate_pos/dashboard.php");

mysqli_close($conn);

?>
