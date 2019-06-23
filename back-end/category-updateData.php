<?php 
$conn = mysqli_connect("localhost","root","","e_commerce");
if(!$conn)
{
    echo "Database connection faild...";
}
$name_cat = $_GET['name'] ;
$id = $_GET['id'] ;
// $date = date('Y-m-d H:i:s');
$sql = "UPDATE category SET name_category='$name_cat' WHERE id_category='$id'";
$res = mysqli_query($conn, $sql);
if(!$res){
	echo "problem";
}else{
	echo "true";
}

