<?php 
$conn = mysqli_connect("localhost","root","","e_commerce");

if(!$conn)
{
    echo "Database connection faild...";
}
$cat_id = $_GET['id'] ;
$sql = "SELECT * FROM category WHERE id_sup_cat='$cat_id'";
$res = mysqli_query($conn, $sql);
if(!$res){
}
if(!mysqli_num_rows($res) > 0){
	 echo "false";
	return;
}
$arr = array();
while($row = mysqli_fetch_assoc($res)){
	$value = $row['id_category'].'_'.$row['created_at'].'_'.$row['is_active'].'_'.$row['name_category'];
	array_push($arr,$value);
}
echo json_encode($arr);