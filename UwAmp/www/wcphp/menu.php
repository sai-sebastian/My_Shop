<link rel="stylesheet" href="css/style.css">
<nav class="navbar navbar-expand-md  border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
      aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= $title == "Welcome" ? "active" : "" ?> " aria-current="page"
            href="index.php">Welcome</a>
        </li>
        <?php
        if (isset($_SESSION['PROFILE'])) {
          ?>
          <?php
          if ($_SESSION['PROFILE']['role'] == 1) {
            ?>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Products" ? "active" : "" ?> " href="allitems.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Basket" ? "active" : "" ?> " href="basket.php">Basket</a>
            </li>
            <?php
          } else {
            ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?= $title == "Product List" ? "active" : "" ?>"
                href="add_product_item.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Product
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="add_product_item.php">Add Product</a></li>
                <li><a class="dropdown-item" href="add_product_list.php">View Product</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?= $title == "Add Product" ? "active" : "" ?>" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Admin Options
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="add_admin.php">Add Admin</a></li>
                <li><a class="dropdown-item" href="listusers.php">View Admin</a></li>
              </ul>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link <?= $title == "Product List" ? "active" : "" ?>" href="add_product_list.php">Add Product</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="listusers.php">Admin Options</a>
            </li> -->
            <?php
          }
        }
        ?>

      </ul>
      <?php
      if (!isset($_SESSION['PROFILE'])) {
        ?>
        <ul class="navbar-nav mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?= $title == "Registration" ? "active" : "" ?>" href="registration.php">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $title == "Connection" ? "active" : "" ?>" href="connection.php">Connection</a>
          </li>

        </ul>
        <?php
      } else {
        ?>
        <ul class="navbar-nav mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>


        </ul>
        <?php
      }
      ?>


    </div>
  </div>
</nav>