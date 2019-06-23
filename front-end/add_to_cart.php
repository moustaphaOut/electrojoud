<?php
require_once('connection.php');
session_start();
if(isset($_POST["id"]) && $_POST['type'] == "delete") {
  $sql = "DELETE FROM wishlist WHERE id_product={$_POST["id"]} and id_client={$_SESSION['idUser']}";
  var_dump($sql);
  $result = mysqli_query($conn, $sql);
  if(!$result)
    echo "Error :".$sql;
}else if(isset($_POST["id"]) && $_POST['type'] == "set_quentity") {
  if($_POST["quentity"] > 0)
    $sql = "UPDATE wishlist SET quantity_wishlist={$_POST["quentity"]} WHERE id_product={$_POST["id"]} and id_client={$_SESSION['idUser']}";
  else
    $sql = "DELETE FROM wishlist WHERE id_product={$_POST["id"]} and id_client={$_SESSION['idUser']}";

  var_dump($sql);
  $result = mysqli_query($conn, $sql);
  if(!$result)
    echo "Error :".$sql;
}else if(isset($_POST["id"]) && $_POST['type'] =="add_product") {
  $sql = "INSERT INTO wishlist (id_client, id_product) VALUES ({$_SESSION['idUser']}, {$_POST["id"]})";
  var_dump($sql);
  $result = mysqli_query($conn, $sql);
  if(!$result)
    echo "Error :".$sql;
}