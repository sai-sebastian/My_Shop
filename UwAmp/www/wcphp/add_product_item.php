<?php
session_start();
require_once("admin_check.php");
$title = "Add Product";
include 'header.php';
include 'menu.php';
require_once("conn.php");
$req = "SELECT * FROM product";
$ps = $pdo->prepare($req);
$ps->execute();
$user = $ps->fetch();
?>
<div class="content">
    <div class="box">
        <div class="container">
            <h3>Add Product</h3>
            <form method="POST" action="handle_add_product.php" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control " id="name" placeholder="Product Name" name="name"
                                required>
                        </div>
                        <div class="col-md-4">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="number" class="form-control " id="price" placeholder="Product Price"
                                name="price" required>
                        </div>
                        <div class="col-md-4">
                            <label for="photo" class="col-form-label">Photo</label>
                            <input type="file" class="form-control " id="photo" name="photo" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="price" class="col-form-label">Category</label>
                            <select class="form-select me-3" name="category" id="category" style="width: 100%;">
                                <option value="Head Phones">Head Phones</option>
                                <option value="Wearable Electronics">Wearable Electronics</option>
                                <option value="Shoes">Shoes</option>
                                <option value="Beauty Care">Beauty Care</option>
                                <option value="TVs">TVs</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="description" class="col-form-label">Description</label>
                            <textarea rows="5" type="text" class="form-control " id="description" name="description"
                                placeholder="Enter Your Prouct Description..." required></textarea>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit">Add
                                Product</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>