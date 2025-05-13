<?php

include('includes/db.php');

$item_name = $_POST['item'];
$item_code = $_POST['sku'];
$item_price = $_POST['price'];
$item_stock = $_POST['stock'];
$item_description = $_POST['description'];


    $sql = "INSERT INTO items(item_name,sku,price,stock,`description`) 
            VALUES ('{$item_name}','{$item_code}','{$item_price}','{$item_stock}','{$item_description}')";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
    
    if ($result) {
        echo "success"; 
        // header("Location: http://localhost/shopmate_org_pagination/view_users.php");
    } else {
        die("Something went wrong try again: " . mysqli_error($conn));
    }


// header("Location: http://localhost/shopmate_org_pagination/view_users.php");


?>