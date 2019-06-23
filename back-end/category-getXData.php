<?php 
$conn = mysqli_connect("localhost","root","","e_commerce");

if(!$conn)
{
    echo "Database connection faild...";
}
$cat_id = $_GET['id'] ;
$arr = array();
for ($i=0; $i < 5 ; $i--) { 
	$sql = "SELECT * FROM category WHERE id_category='$cat_id'";
	$res = mysqli_query($conn, $sql);
	if(!$res){
	}
	if(mysqli_num_rows($res) > 0){
		$row = mysqli_fetch_assoc($res)
		$id = $row["id_sup_cat"];
		array_push($arr, $id);
		$cat_id = $id;
	}else{
		if(!empty($arr) ){
			echo json_encode($arr);
			return;
		}else{
			echo "false";
			return;
		}
		
	}
}

