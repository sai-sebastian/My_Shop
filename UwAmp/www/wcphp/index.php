<?php
session_start(); //for messages
$title = "Welcome";
include 'header.php';
include 'menu.php';
?>
<div class="container">
    <!-- if if a message was sent by another page Display it-->
    <?php
    if (isset($_SESSION['message'])) {
        ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!-- remove the received a message -->
        <?php
        unset($_SESSION['message']);
    }
    if (!isset($_SESSION['PROFILE'])) {
        ?>
        <h1>Welcome without any profile</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus deserunt ad, tempora optio placeat expedita?
            Accusamus suscipit vel quod harum sapiente sint illum consequatur, inventore eligendi blanditiis libero, laborum
            vero?</p>
        <?php
        include 'caroussel.php';
    } else {
        ?>
        <?php
        if ($_SESSION['PROFILE']['role'] == 1) {
            $role = "shopper";
        } else {
            $role = "admin";
        } ?>
        <h1>Welcome to a
            <?= $role ?>
        </h1>
        <h1>Name:
            <?= $_SESSION['PROFILE']['name'] ?>
        </h1>
        <?php
    }
    ?>
</div>
<?php
include 'footer.php';
?>