<?php
function injection_sql($str){
  $str2 ="";
  for ($i=0; $i < strlen($str); $i++) { 
    if($str[$i]=="'"){
      $str2 .="\'";
    }else{
      $str2 .= $str[$i];
    }
  }

  return $str2;
}
require_once('connection.php');
  $name = $_POST['name'];
  $brand = $_POST['brand'];
  $caracteristique = injection_sql($_POST['caracteristique']);
  $description = injection_sql($_POST['description']);
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
  $sql = "INSERT INTO product (id_category ,name_product, brand_product, caracteristique_product, description_product, image_product, old_price_product, price_product, quantity_product, created_at, slug_product, is_active)
          VALUES ('{$id_categorie}' ,'{$name}', '{$brand}', '{$caracteristique}', '{$description}', '{$image}', '{$old_price}', '{$price}', '{$quantity}', '{$created_at}','{$slug}', {$is_active})";
else
  $sql = "UPDATE product set id_category='{$id_categorie}' ,name_product='{$name}', brand_product='{$brand}', caracteristique_product='{$caracteristique}', description_product='{$description}', image_product='{$image}', old_price_product='{$old_price}', price_product='{$price}', quantity_product='{$quantity}', created_at='{$created_at}', slug_product='{$slug}', is_active= {$is_active} where id_product= {$_POST['update']};";

  $result = mysqli_query($conn, $sql);
  if($result){

    header("Location: gestion_produit.php");
  }else{
    echo "Error :".$sql;
  }