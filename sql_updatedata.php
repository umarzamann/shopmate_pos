<?php

include('includes/db.php');

$i_id = $_POST['tid'];
$item = $_POST['item_name'];
$item_price = $_POST['price'];
$item_stock = $_POST['stock'];


$sql = "UPDATE items SET item_name = '{$item_name}', price = '{$item_price}',stock = '{$item_stock}' WHERE tid = {$i_id}";
$result = mysqli_query($conn, $sql) or die("Check Query Unsuccessful");

if ($result) {
    echo "success";
} else {
    die("Something went wrong try again: " . mysqli_error($conn));
}
 


//header("Location: http://localhost/shopmate_org_pagination/view_users.php");


?>