<?php 
$conn = mysqli_connect("localhost","root","","e_commerce");
if(!$conn)
{
    echo "Database connection faild...";
}
$name_cat = $_GET['name'] ;
$date = date('Y-m-d H:i:s');
$sql = "INSERT INTO  category(name_category,created_at,is_active)  VALUES('$name_cat','$date',1) ";
$res = mysqli_query($conn, $sql);
if(!$res){
	echo "problem";
}
