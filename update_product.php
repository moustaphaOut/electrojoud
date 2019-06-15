<?php
  require_once("connection");
function dhtmlconsole($msg='') {
  static $pos=0;
  $pos++;
  header('X-DHTML-CONSOLE-MSG'.$pos.': '.$msg);
}
//require_once('connection.php');
//session_start();
//$email = $_SESSION['email'];
  $id = $_GET['id_produit'];
  $sql = mysqli_query($conn,"SELECT * FROM product WHERE id_product='$id' ");
  if(!mysqli_num_rows($sql) > 0){
    echo "false";
    return;
  }
  $row = mysqli_fetch_assoc($sql);
  $name = $row['name']; 
  $brand = $row['brand'];
  $caracteristique = $row['caracteristique'];
  $date_c = $row['created_at'];
  $description = $row['description'];
  $old_price = $row['old_price'];
  $price = $row['price'];
  $quantity = $row['quantity'];
  echo $name.'.'.$brand.'.'.$caracteristique.'.'.$date_c.'.'.$old_price.'.'.$price.'.'.$quantity;

  mysqli_close($conn);

