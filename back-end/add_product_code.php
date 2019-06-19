<?php
require_once('connection.php');
if( $_POST['sumbit']){
  #---------- Start uploading file ----------
  $target_dir = "img/uploads/";
  $image = $target_dir . basename($_FILES["file"]["name"]);
  $uploadOk = 1;
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["file"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  $temp = explode(".", $image);
  $newfilename =$_POST['name'] . '.' . end($temp);
  move_uploaded_file($_FILES["file"]["tmp_name"],$image .$newfilename);
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
  $slugOne = explode(" ", $name);
  $slug = "" . $slugOne[0];
  $i = 1;
  while(isset($slugOne[$i])){
    $slug = $slug .'-'. $slugOne[$i];
    $i = $i + 1 ;
  }
  //  $id_sous_category = $_POST['id_sous_category'];


  $sql = "INSERT INTO product (id_category ,name, brand, caracteristique, description, image, old_price, price, quantity, created_at, slug)
          VALUES ('{$id_categorie}' ,'{$name}', '{$brand}', '{$caracteristique}', '{$description}', '{$image}', '{$old_price}', '{$price}', '{$quantity}', '{$created_at}','{$slug}')";//, id_categorie, id_sous_category, '{$id_categorie}', '{$id_sous_category}'

  $result = mysqli_query($conn, $sql);
  if($result){

    header("Location: gestion_produit.php");
  }else{
    echo "Error :".$sql;
  }
}else if ($_POST['update']) {
  
   #---------- Start uploading file ----------
  $target_dir = "img/uploads/";
  $image = $target_dir . basename($_FILES["file"]["name"]);
  $uploadOk = 1;
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["file"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  $temp = explode(".", $image);
  $newfilename =$_POST['name'] . '.' . end($temp);
  move_uploaded_file($_FILES["file"]["tmp_name"],$image .$newfilename);
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
  $slugOne = explode(" ", $name);
  $slug = "" . $slugOne[0];
  $i = 1;
  while(isset($slugOne[$i])){
    $slug = $slug .'-'. $slugOne[$i];
    $i = $i + 1 ;
  }
  $sql = "UPDATE product set id_category='{$id_categorie}' ,name='{$name}', brand='{$brand}', caracteristique='{$caracteristique}', description='{$description}', image='{$image}', old_price='{$old_price}', price='{$price}', quantity='{$quantity}', created_at='{$created_at}', slug='{$slug}' where id_product= {$_POST['update']};";
  $result = mysqli_query($conn, $sql);
  if($result){

    header("Location: gestion_produit.php");
  }else{
    echo "Error :".$sql;
  }
}

?>
