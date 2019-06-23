<?php
require_once('connection.php');
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
  $slugOne = explode(" ", $name);
  $slug = "" . $slugOne[0];
  $i = 1;
  while(isset($slugOne[$i])){
    $slug = $slug .'-'. $slugOne[$i];
    $i = $i + 1 ;
  }

  $destination = "../front-end/img/products/";
  $file_name = $slug;
  include_once("uploadFile.php");
  $image = $fileDestination;
  //  $id_sous_category = $_POST['id_sous_category'];

if(isset($_POST["submit"]))
  $sql = "INSERT INTO product (id_category ,name_product, brand, caracteristique, description, image, old_price, price, quantity, created_at, slug)
          VALUES ('{$id_categorie}' ,'{$name}', '{$brand}', '{$caracteristique}', '{$description}', '{$image}', '{$old_price}', '{$price}', '{$quantity}', '{$created_at}','{$slug}')";
else
  $sql = "UPDATE product set id_category='{$id_categorie}' ,name_product='{$name}', brand='{$brand}', caracteristique='{$caracteristique}', description='{$description}', image='{$image}', old_price='{$old_price}', price='{$price}', quantity='{$quantity}', created_at='{$created_at}', slug='{$slug}' where id_product= {$_POST['update']};";

  $result = mysqli_query($conn, $sql);
  if($result){

    header("Location: gestion_produit.php");
  }else{
    echo "Error :".$sql;
  }