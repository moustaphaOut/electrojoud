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

    $query = " UPDATE client
     SET  nom_client ='$nom', prenom_client ='$prenom', e_mail_client ='$email', password_client ='$pass',
     telephone_client ='$phone', adresse_client ='$adresse', image_client = '$image'
     WHERE id_client = '".$_POST['id']."' ";
     var_dump($query);
    if ($conn->query($query) === TRUE) {
        header("Location: profile_2.php");
        echo 'success';
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }



$conn->close();
