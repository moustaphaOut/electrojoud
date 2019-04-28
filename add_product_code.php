<?php
//Here, we write code for addCourse1.2.

// session_start();
// require_once('connection.php');
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
// CONNECT TO BD
$con = mysqli_connect('127.0.0.1:3307','root','');
if(!$con){
  echo 'Server NOT CONNECTED';
}
if(!mysqli_select_db($con,'e_comerce')){
  echo 'DB NOT CONNECTED';
}
//-------------
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

$result = mysqli_query($con, $sql);
if($result){

  header("Location: index.php?add=done");
}else{
  echo "Error :".$sql;
}


?>
