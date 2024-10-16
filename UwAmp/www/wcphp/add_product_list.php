<?php
session_start();
require_once("admin_check.php");
$title = "Product List";
include 'header.php';
include 'menu.php';
?>
<style>
    /* Add margin-left to h4 */
    h4 {
      margin-left: 10px; 
    }
    /* table {
      margin-left: 10px; 
      margin-right: 20px !important;
    } */
  </style>
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="content">
<form method="POST" action="add_product_item.php" enctype="multipart/form-data">
    <div class="main">
        <h4>   Product List</h4>
        <button class="btn btn-outline-primary" type="submit">New Product</button>
    </div>
    <h4></h4>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Product Name</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th style="width: 50%;" scope="col">Description</th>
            <th scope="col">Action</th>
    </thead>
    <tbody>
        <?php
        // Connection :
        require_once("conn.php");
        $req = "SELECT * FROM product";
        $ps = $pdo->prepare($req);
        $ps->execute();
        while ($row = $ps->fetch()) {
            ?>
            <tr class="vertical-align-middle">
                <th scope="row">
                    <?= $row['id'] ?>
                </th>
                <td><img src="images/<?= $row['photo'] ?>" width="50px" height="50px"></td>
                </td>
                <td>
                    <?= $row['name'] ?>
                </td>
                <td>
                    <?= $row['categories'] ?>
                </td>
                <td>
                    <?= $row['price'] ?>
                </td>
                <td>
                    <?= $row['description'] ?>
                <td><a href="delete_product.php?id=<?= $row['id'] ?>">Delete</a> <a href="edit_product.php?id=<?= $row['id'] ?>">Edit</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
</div>
<style>
    .vertical-align-middle td,
    .vertical-align-middle th {
        vertical-align: middle;
    }
</style>
</div>
</div>

<?php
include 'footer.php';
?>
<!-- <div class="col-md-3 mb-3">
                 <div class="card" style="width: 18rem;">
                    <img src="images/images.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.</p>
                    </div>
                </div> -->