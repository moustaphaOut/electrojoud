<?php
    session_start();
    require_once('connection.php');

     $email1 =$_POST['username'];
     $Motpasse1 =$_POST['password'];
    
     $name    = $_POST['nom'];
     $username= $_POST['username'];
     $password= $_POST['password'];
     $email2   = $_POST['e_mail'];
     $phone   = $_POST['telephone'];

     $sql    ="SELECT * From admin";
     $result = mysqli_query($conn, $sql);

     while ($row = $result->fetch_assoc()):
            $emailC     = $row["username"];
            $motpasseC  = $row["password"];

            if($email1 == $emailC && $Motpasse1== $motpasseC)
                header("location:home-carousel.php");
            else echo "erreur";

     endwhile;
?>
