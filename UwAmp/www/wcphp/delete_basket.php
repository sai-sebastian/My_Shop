<?php
$id = htmlentities($_GET['id']);
require_once("conn.php");
$req = "DELETE FROM basket WHERE id=?";
$ps = $pdo->prepare($req);
$params = array($id);
$ps->execute($params);

header("location:basket.php")

    ?>