<?php
session_start(); // to handle msgs

// Form Content :
$email = htmlentities($_POST['email']);
$password = htmlentities($_POST['password']);
$password = md5($password); //hash the password
// Connection :
require_once("conn.php");
$req = "SELECT * from users WHERE email=? AND pwd=?";
$ps = $pdo->prepare($req);
$params = array($email, $password);
//put the message in the session and sent it to the index.php page 
$ps->execute($params);
if ($user = $ps->fetch()) {
  $_SESSION['PROFILE'] = $user;
  $_SESSION['message'] = "Welcome Dear " . $user['name'];
  header('Location:index.php');
} else {
  $_SESSION['message'] = "Wrong email or password";
  header('Location:connection.php');
}




?>