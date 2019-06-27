<?php
require_once('connection.php');

function injection_sql($str){
  $str2 ="";
  for ($i=0; $i < strlen($str); $i++) { 
    if($str[$i]=="'"){
      $str2 .="\'";
    }else{
      $str2 .= $str[$i];
    }
  }

  return $str2;
}

$shipping_date = injection_sql($_POST['shipping_date']);
$shipping_status = injection_sql($_POST['shipping_status']);
$status = injection_sql($_POST['status']);

$sql = "UPDATE ordeer set shipping_date='{$shipping_date}' ,shipping_status='{$shipping_status}', status='{$status}' where id_order= {$_POST['update']};";

  $result = mysqli_query($conn, $sql);
  if($result){

    header("Location: sales.php");
  }else{
    echo "Error :".$sql;
  }