<?php
if (!isset($_SESSION['PROFILE'])) {
    header('Location: index.php');
} else
    if ($_SESSION['PROFILE']['role'] != 1) {
        header('Location: index.php');
    }
?>