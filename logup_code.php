<?php
    require_once('connection.php');
    
    $username = $_POST['username'];
    $e_mail = $_POST['e_mail'];
    $nom = $_POST['nom'];
    $password = md5($_POST['password']);
    //$perenom = $_POST['perenom'];
    $telephone = $_POST['telephone'];
    
    $sql = "INSERT INTO client (username, e_mail, nom, password, telephone) VALUES ('{$username}', '{$e_mail}', '{$nom}', '{$password}', '{$telephone}')";

    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: index.php?signup=done");
    }
    else{
        echo "Error :".$sql;
    }
?>
