<?php

include('includes/db.php');

$u_id = $_POST['uid'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$username = $_POST['username'];


$sql = "UPDATE users SET full_name = '{$full_name}', email = '{$email}',username = '{$username}' WHERE uid = {$u_id}";
$result = mysqli_query($conn, $sql) or die("Check Query Unsuccessful");

if ($result) {
    echo "success";
} else {
    die("Something went wrong try again: " . mysqli_error($conn));
}
 


//header("Location: http://localhost/shopmate_org_pagination/view_users.php");


?>