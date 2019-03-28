<?php
    session_start();
    include_once('connection.php');

     $email =$_POST['username'];
     $Motpasse =$_POST['password'];

     $sql    ="SELECT * From admin";
     $result = mysqli_query($conn, $sql);

   while ($row = $result->fetch_assoc()):
        $emailC     = $row["username"];
        $motpasseC  = $row["password"];

        if($email == $emailC && $Motpasse== $motpasseC)
            header("location:home-carousel.php");
        else echo "erreur";

    endwhile;
?>
