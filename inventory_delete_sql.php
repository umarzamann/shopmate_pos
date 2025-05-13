<?php

$item_id = $_GET['id'];

include('includes/db.php');

$sql = "DELETE FROM items WHERE tid = {$item_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

// echo "User Deleted";
if($result){
    $msg = 'Deleted successfully';
}else{
$msg = 'Failed';
}
header('location:inventory_view.php?msg=' . $msg);
exit;
?>
