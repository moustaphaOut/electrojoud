<?php 
$conn = mysqli_connect("localhost","root","","e_commerce");
if(!$conn)
{
    echo "Database connection faild...";
}
$name_cat = $_GET['name'] ;
$date = date('Y-m-d H:i:s');
$state = $_GET['comingFrom'] ;
if($state == '1'){
	$res = mysqli_query($conn, "SELECT max(id_category) from category");
	if(mysqli_num_rows($res) > 0){
		$row = mysqli_fetch_row($res);
	}
	$id = $row[0] + 1;
	$sql = "INSERT INTO  category(name_category,created_at,is_active,id_category)  VALUES('$name_cat','$date',1,'$id') ";
	$res = mysqli_query($conn, $sql);
	if(!$res){
		echo "problem";
	}else{
		echo $id;
	}
}elseif ($state == '0') {
	$id = $_GET['id'] ;
	$sql = "INSERT INTO  category(name_category,created_at,is_active,id_sup_cat)  VALUES('$name_cat','$date',1,'$id') ";
	$res = mysqli_query($conn, $sql);
	if(!$res){
		echo "problem";
	}else{
		echo $id.'.'.$name_cat.'.'.$date;
	}
}


