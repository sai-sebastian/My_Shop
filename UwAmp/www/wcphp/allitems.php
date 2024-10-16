<?php
session_start(); //for messages
require_once("shopper_check.php");
$title = "Products";
include 'header.php';
include 'menu.php';
?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="row pt-4 mx-n2">
  <?php
  // Connection :
  require_once("conn.php");
  $req = "SELECT * FROM product ORDER  BY price DESC";
  $ps = $pdo->prepare($req);
  $ps->execute();
  while ($row = $ps->fetch()) {
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
<?php
include 'footer.php';
?>