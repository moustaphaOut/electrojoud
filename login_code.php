<?php
//Here, we write code for addCourse1.2.
session_start();
require_once('connection.php');
$email = $password = '';

$email = $_POST['username'];
$password =md5($_POST['password']);
//$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "SELECT * FROM client WHERE username='{$email}' AND password='{$password}';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if(mysqli_num_rows($result)>0){
    $_SESSION['username'] = $email;
    header("Location: index.php?login=done");//send email ro welcome 

}else{
    
    header("Location: login.php?failed=Invalid email or password");
}