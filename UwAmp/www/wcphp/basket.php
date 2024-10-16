<?php
session_start();
require_once("shopper_check.php");
$title = "Basket";
include 'header.php';
include 'menu.php';
?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="content">
    <div class="box">
        <table class="table table-striped">
            <thead>
            </thead>
            <tbody>
                <?php
                // Connection :
                require_once("conn.php");
                $req = "SELECT * FROM basket where user_id=?";
                $ps = $pdo->prepare($req);
                $params = array($_SESSION['PROFILE']['id']);
                $ps->execute($params);
                $ps->execute();
                while ($row = $ps->fetch()) {
                    $req1 = "SELECT * FROM product where id=?";
                    $ps1 = $pdo->prepare($req1);
                    $params1 = array($row['product_id']);
                    $ps1->execute($params1);
                    $ps1->execute();
                    $product = $ps1->fetch();
                    ?>
                    <div class="col-md-10 mr-auto">
                        <div class="d-flex justify-content-between">
                            <img src="images/<?= $product['photo'] ?>" width="110px" height="110px"></td>
                            <a href="delete_basket.php?id=<?= $row['id'] ?>">Delete</a>
                        </div>
                        <div class="card-body py-2">
                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span class="text-accent">
                                        €
                                        <?= $product['price'] ?>
                                    </span>
                                </div>
                                <a class="product-meta d-block fs-xs pb-1" href="#" data-product-id="<?= $product['id'] ?>">
                                    <?= $product['categories'] ?>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6><a class="product-title fs-sm" href="#" data-product-id="<?= $product['id'] ?>">
                                        <?= $product['name'] ?>
                                    </a></h6>
                                <div class="col-md-4">
                                    <select class="form-select me-3" name="selectOption" id="selectOption"
                                        style="width: 100%;">
                                        <option value="1" <?= ($row['count'] == '1') ? 'selected' : '' ?>>1</option>
                                        <option value="2" <?= ($row['count'] == '2') ? 'selected' : '' ?>>2</option>
                                    </select>
                                    <div id="result"></div>
                                    <script src="script.js"></script>
                                </div>
                            </div>
                            <p class="card-text">
                                <?= $product['description'] ?>
                            </p>


                        </div>
                    </div>

                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
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