<?php 
require_once('connection.php');

$id = $_GET['id'] ;
$sql = "DELETE FROM category WHERE id_sup_cat = '$id' ";
$res = mysqli_query($conn, $sql);
if(!$res){
	echo "problem";
}
$sql = "DELETE FROM category WHERE id_category = '$id' ";
$res = mysqli_query($conn, $sql);
if(!$res){
	echo "problem";
}else{
	echo $id;
}
