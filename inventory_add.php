<?php $pageTitle = "Inventory";
    include('includes/header.php');  
     ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/topbar.php'); ?>

<div class="container py-5">
    <?php $crudTitle = "Add Items";
    include('includes/inventory_nav.php'); ?>    
    <div class="bg-light rounded p-4">
    <form id="addItemForm" class="post-form"  action="inventory_insert.php'"  method="post">
  
                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label text-black">Item Name:</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="item" placeholder="Item Name" required>
                    </div>            
                </div>
                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label text-black">SKU (Item Code):</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="sku" placeholder="Item Code" required>
                    </div>            
                </div>
                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label text-black">Selling Price</label>
                    <div class="col-sm-5">
                    <input type="number" class="form-control" name="price"  required>
                    </div>            
                </div>
                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label text-black">Stock</label>
                    <div class="col-sm-5">
                    <input type="number" class="form-control" name="stock"  required>
                    </div>            
                </div>
                <div class="mb-3 row">
                <label class="col-sm-2 col-form-label text-black">Description</label>
                    <div class="col-sm-5">
                    <textarea class="form-control" rows="2" placeholder="Item's Description.." name="description" id="description"></textarea>
                    </div>            
                </div>
        <div class="d-flex justify-content-center gap-5">
        <a href="inventory_view.php" class="btn btn-secondary btn-scale text-uppercase px-3">Close</a>
        <input class="btn btn-success text-uppercase btn-scale px-4" type="submit" value="Add">
        </div>
</form>

    </div>
        
</div>
    

<?php include('includes/footer.php'); ?>