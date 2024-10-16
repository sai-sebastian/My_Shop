<?php
session_start();
require_once("shopper_check.php");
$title = "Product Detail";
include 'header.php';
include 'menu.php';
$id = htmlentities($_GET['id']);
require_once("conn.php");
$req = "SELECT * FROM product WHERE id=?";
$ps = $pdo->prepare($req);
$params = array($id);
$ps->execute($params);
$product = $ps->fetch();
?>
<form method="POST" action="add_basket.php?id=<?= $id ?>" enctype="multipart/form-data">
<div class="content">
    <div class="box">
        <div class="row">
            <div class="col-md-5 mr-auto">
                <div class="container">
                    <img src="images/<?= $product['photo'] ?>" height="400px" class="card-img-top" alt="Product">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column">

                <h6 class="product-meta d-block fs-xs pb-1" href="#" data-product-id="<?= $product['id'] ?>">
                    <?= $product['categories'] ?>
                </h6>
                <h3><a class="product-title fs-sm" href="#" data-product-id="<?= $product['id'] ?>">
                        <?= $product['name'] ?>
                    </a></h3>
                <div class="product-price">
                    <h5 class="product-meta d-block fs-xs pb-1" href="#" data-product-id="<?= $product['id'] ?>">
                        €
                        <?= $product['price'] ?>
                    </h5>
                </div>
                <p class="card-text">
                    <?= $product['description'] ?>
                </p>
                <div class="mt-auto">
                    <div class="d-flex align-items-center pt-2 pb-4">
                        <select class="form-select me-3" name="count" id="count" style="width: 5rem;">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <button type="submit" class="btn btn-block btn-primary rounded-0 py-2 px-4">Add to
                            Basket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="style.css">
    <h5 class="custom-h5">Other Products</h5>
    <div class="row pt-4 mx-n2">
        <?php
        // Connection :
        require_once("conn.php");
        $req = "SELECT * FROM product ORDER  BY price DESC";
        $ps = $pdo->prepare($req);
        $ps->execute();
        $counter = 0;
        while ($row = $ps->fetch()) {
            if ($counter >= 4) {
                break;
            }
            if ($row['id'] != $id) {
                ?>
                <div class="col-md-3 col-sm-6 px-2 mb-4">
                    <div class="card product-card" style="width: 18rem;" data-product-id="<?= $row['id'] ?>">
                        <a class="card-img-top d-block overflow-hidden">
                            <img src="images/<?= $row['photo'] ?>" height="200px" class="card-img-top" alt="Product">
                        </a>
                        <div class="card-body py-2">
                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span class="text-accent">
                                        €
                                        <?= $row['price'] ?>
                                    </span>
                                </div>
                                <a class="product-meta d-block fs-xs pb-1" href="#" data-product-id="<?= $row['id'] ?>">
                                    <?= $row['categories'] ?>
                                </a>
                            </div>

                            <h6><a class="product-title fs-sm" href="#" data-product-id="<?= $row['id'] ?>">
                                    <?= $row['name'] ?>
                                </a></h6>
                            <p class="card-text">
                                <?= $row['description'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                $counter++;
            }
        }
        ?>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var productLinks = document.querySelectorAll('.product-card');

            productLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    var productId = this.getAttribute('data-product-id');
                    window.location.href = 'product_details.php?id=' + productId;
                });
            });

        });
    </script>
</div>
</form>
<?php
include 'footer.php';
?>