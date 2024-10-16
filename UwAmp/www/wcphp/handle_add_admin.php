<?php
session_start(); // to handle msgs

// Form Content :
$name = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$password = htmlentities($_POST['password']);
$photo = htmlentities($_FILES['photo']['name']); //get the name of the uploaded file
$fichierTemp = $_FILES['photo']['tmp_name']; //get the temporary filename of the file in which the uploaded file was stored on the server.
move_uploaded_file($fichierTemp, './images/' . $photo); //move the uploaded file to the folder 'images' of your project 
$role = 0; // 1 for a shopper and 0 for a admin
$password = md5($password); //hash the password
// Connection :
require_once("conn.php");
$req = "INSERT INTO users(name,email,pwd,photo,role) VALUES (?,?,?,?,?)";
$ps = $pdo->prepare($req);
$params = array($name, $email, $password, $photo, $role);
//put the message in the session and sent it to the index.php page 
if ($ps->execute($params)) {
    $_SESSION['message'] = "Successful Added Admin";

} else {
    $_SESSION['message'] = "Unable to Add Admin";
}

// Redirection vers the welcome Page;
header('Location: listusers.php');


?>