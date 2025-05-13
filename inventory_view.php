<?php $pageTitle = "Inventory";
    include('includes/header.php');  
     ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/topbar.php'); ?>

<div class="container py-5">
<?php $crudTitle = "Inventory Items";
    include('includes/inventory_nav.php'); ?>
    <?php 
    include('includes/db.php');

         $sql = "SELECT * FROM items";
         $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

         if(mysqli_num_rows($result) > 0 ) {
         ?>
         <div class="bg-light p-4 rounded">
        <table class="table table-bordered table-striped table-hover">
          <thead class="table-warning text-center">
            <tr>
              <th>ID</th>
              <th>Item Name</th>
              <th>Item Code</th>
              <th>Price(PKR)</th>
              <th>Stock</th>
              <th>description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php

            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr class="text-center">
              <td><?php echo $row['tid'] ?></td>
              <td><?php echo $row['item_name'] ?></td>
              <td><?php echo $row['sku'] ?></td>
              <td><?php echo $row['price'] ?></td>
              <td><?php echo $row['stock'] ?></td>
              <td><?php echo $row['description'] ?></td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                <a class="btn btn-primary btn-scale px-4" href='inventory_update_inline.php?tid=<?php echo $row['tid']; ?>'>Edit</a>
                <span class="d-flex justify-content-center align-items-center text-muted fw-bold">|</span>
                  <a class="btn btn-danger btn-scale px-3" onclick="confirmItemDeletion(<?= $row['tid']; ?>)" >Delete</a>
                </div>  
            </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        </div>
        <?php } else {
          echo "<div class='bg-light p-4'><h2>No record found</h2></div>";
        }
    ?>
        
</div>
    

<?php include('includes/footer.php'); ?>