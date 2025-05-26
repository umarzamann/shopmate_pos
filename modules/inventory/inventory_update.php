<?php $pageTitle = "Inventory";
    include('includes/header.php');  
     ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/topbar.php'); ?>

<div class="container py-5">
    <?php $crudTitle = "Update Items";
    include('includes/inventory_nav.php'); ?>
<div class="bg-light p-4 rounded">

<div class="card  shadow-sm border-0 mb-4">
    <div class="card-body">
        <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">    
                <div class="mb-3 row">
                    <label class="col-sm-1 col-form-label text-black">ID:</label>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="tid" required>
                            <input class="btn btn-success btn-scale mt-2 px-3" type="submit" name="showbtn" value="Show" />         
                        </div>   
                </div>
            </form>
    </div>        
    </div>

    <?php
    if(isset($_POST['showbtn'])){
   
    include 'includes/db.php';

    $i_id = $_POST['tid'];

    $sql = "SELECT * FROM items WHERE tid = {$i_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
                <form id="updateItem" class="post-form" action="inventory_update_sql.php" method="post">
                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label text-black">Item Name:</label>
                    <div class="col-sm-5">
                    <input type="hidden" name="tid" value="<?php echo $row['tid']; ?>"/>                            
                    <input type="text" class="form-control" name="item" value="<?php echo $row['item_name'] ?>" >
                    </div>            
                </div>

                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label text-black">Selling Price</label>
                    <div class="col-sm-5">
                    <input type="number" class="form-control" name="price"  value="<?php echo $row['price'] ?>">
                    </div>            
                </div>
                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label text-black">Stock</label>
                    <div class="col-sm-5">
                    <input type="number" class="form-control" name="stock"  value="<?php echo $row['stock'] ?>">
                    </div>            
                </div>
                

                <a href="inventory_view.php" class="btn btn-scale btn-secondary text-uppercase px-4">Back</a>
                <input class="btn btn-success btn-scale text-uppercase px-4" type="submit" value="Save">
        </form>
        </div>
    </div>    
    <?php
      }
    } else {
        echo '<div class="alert alert-warning  mt-4" role="alert">
        <strong> No Record Found</strong> for ID: '. htmlspecialchars($i_id) . '
        </div>';
    }
} 
    ?>


</div>
        
</div>
    

<?php include('includes/footer.php'); ?>