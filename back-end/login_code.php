<?php
//Here, we write code for addCourse1.2.
session_start();
require_once('connection.php');
$email = $password = '';

$email = $_POST['email'];
$password =md5($_POST['pass']);
//$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "SELECT * FROM admin WHERE email_admin='{$email}' AND password_admin='{$password}';";
	var_dump($sql);
	//return 0;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$id_client = $row['id_admin'];

if(mysqli_num_rows($result)>0){
	$_SESSION['idUser'] = $id_client;
    $_SESSION['username'] = $email;
    header("Location: index.php");//send email ro welcome 

}else{
    header("Location: login.php?failed=Invalid email or password");
}