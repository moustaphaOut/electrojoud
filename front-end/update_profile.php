<?php
require_once ("connection.php");
session_start();
$id = $_POST['id'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['mail'];
$pass = md5($_POST['password']);
$phone = $_POST['phone'];
$adresse = $_POST['adress'];
$city = $_POST['city'];
$postcode = $_POST['postcode'];

$destination = "../front-end/img/products/";
$file_name = "";
include_once("../back-end/uploadFile.php");
$image = $fileDestination;

$sql = " UPDATE adress SET  adresse ='$adresse', city ='$city', postcode ='$postcode' WHERE id_client = '".$_POST['id']."' ";
$conn->query($sql);

$query = " UPDATE client SET  nom_client ='$nom', prenom_client ='$prenom', email_client ='$email', password_client ='$pass', telephone_client ='$phone', image_client = '$image' WHERE id_client = '".$_POST['id']."' ";

if ($conn->query($query) === TRUE) {
    header("Location: profile_2.php");
    echo 'success';
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();