<?php
//Here, we write code for addCourse1.2.

    session_start();
    require_once('connection.php');
    #---------- Start uploading file ----------
    if(isset($_POST['submit'])){
        include_once("uploadFile.php");
        $image = $fileDestination;
    }
    #---------- End uploading file ----------

    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $caracteristique = $_POST['caracteristique'];
    $description = $_POST['description'];
    $is_active = $_POST['is_active'];
    $old_price = $_POST['old_price'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $created_at = date('Y-m-d H:i:s');
    $id_categorie = $_POST['id_categorie'];
    //  $id_sous_category = $_POST['id_sous_category'];
    

    $sql = "INSERT INTO product (name, brand, caracteristique, description, image, is_active, old_price, price, quantity, created_at) VALUES ('{$name}', '{$brand}', '{$caracteristique}', '{$description}', '{$image}', '{$is_active}', '{$old_price}', '{$price}', '{$quantity}', '{$created_at}')";//, id_categorie, id_sous_category, '{$id_categorie}', '{$id_sous_category}'

    $result = mysqli_query($conn, $sql);
    if($result){

        header("Location: index.php?add=done");
    }else{
        echo "Error :".$sql;
    }


?>
