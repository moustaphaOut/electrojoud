<?php
    require_once('connection.php');
    
    $username = $_POST['username'];
    $e_mail = $_POST['e_mail'];
    $nom = $_POST['nom'];
    $password = md5($_POST['password']);
    //$perenom = $_POST['perenom'];
    $telephone = $_POST['telephone'];
    
    $sql = "INSERT INTO client (username_client, email_client, nom_client, password_client, telephone_client) VALUES ('{$username}', '{$e_mail}', '{$nom}', '{$password}', '{$telephone}')";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        $sql2 = "SELECT id_client FROM client WHERE email_client='{$e_mail}' AND password_client='{$password}';";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_array($result2);
        $id_client = $row2["id_client"];
        $_SESSION['idUser'] = $id_client;
        $_SESSION['username'] = $_email;
        header("Location: index.php?signup=done");
    }
    else{
        echo "Error :".$sql;
    }
?>
