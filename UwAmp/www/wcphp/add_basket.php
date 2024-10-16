<?php
session_start();
require_once("shopper_check.php");
$product_id = htmlentities($_GET['id']);
$count = htmlentities($_POST['count']); // 1 for a simple user and 0 for a admin
require_once("conn.php");
$currentDateTime = date('Y-m-d');
$req = "INSERT INTO basket(product_id,user_id,date,count) VALUES (?,?,?,?)";
$ps = $pdo->prepare($req);
$params = array($product_id, $_SESSION['PROFILE']['id'], $currentDateTime, $count);
$ps->execute($params);
header("location:basket.php")

    ?>