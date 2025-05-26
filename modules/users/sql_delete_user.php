<?php

$user_id = $_GET['id'];

include('includes/db.php');

$sql = "DELETE FROM users WHERE uid = {$user_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

// echo "User Deleted";
if($result){
    $msg = 'Deleted successfully';
}else{
$msg = 'Failed';
}
header('location:view_users.php?msg=' . $msg);
exit;
?>
