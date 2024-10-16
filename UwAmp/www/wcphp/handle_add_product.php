<?php
session_start(); // to handle msgs

// Form Content :
$name = htmlentities($_POST['name']);
$price = htmlentities($_POST['price']);
$description = htmlentities($_POST['description']);
$category = htmlentities($_POST['category']);
$photo = htmlentities($_FILES['photo']['name']); //get the name of the uploaded file
$fichierTemp = $_FILES['photo']['tmp_name']; //get the temporary filename of the file in which the uploaded file was stored on the server.
move_uploaded_file($fichierTemp, './images/' . $photo); //move the uploaded file to the folder 'images' of your project 
// Connection :
require_once("conn.php");
$req = "INSERT INTO product(name,price,description,photo,categories) VALUES (?,?,?,?,?)";
$ps = $pdo->prepare($req);
$params = array($name, $price, $description, $photo, $category);
//put the message in the session and sent it to the index.php page 
if ($ps->execute($params)) {
  $_SESSION['message'] = "Added product is successful ";

} else {
  $_SESSION['message'] = "Unable to add product";
}

// Redirection vers the welcome Page;
header('Location: index.php');


?>