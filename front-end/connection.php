<!--
in this file we write code for connection with database.
-->
<?php
$conn = mysqli_connect("localhost","root","","electrojoud");

if(!$conn)
{
    echo "Database connection faild...";
}
?>
