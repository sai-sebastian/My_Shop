<?php
$product_id = htmlentities($_GET['id']);
require_once("conn.php");
$req="UPDATE basket set count=? where id=? ";
$ps=$pdo->prepare($req);
$params=array($name,$email,$role,$id);
$ps->execute($params);
header("location:basket.php")
?>