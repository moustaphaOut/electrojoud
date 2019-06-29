<?php
require_once ("connection.php");
session_start();

/*$sqll = "SELECT * from client where id_client={$_SESSION['idUser']};";
$rsst = mysqli_query($conn, $sqll);
$roow = mysqli_fetch_array($rsst);
$client_name = $roow['nom_client']." ".$roow['prenom_client'];*/

$sql = "SELECT id_adress from adress where id_client={$_SESSION['idUser']};";
$rst = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rst);
$id_adress = $row['id_adress'];
$date = date('Y-m-d H:i:s');
$dateShipping = date('Y-m-d H:i:s');

$query = "INSERT INTO ordeer(id_client, id_adress, order_date, prix_livraison, shipping_date, shipping_status, status) VALUES ({$_SESSION['idUser']},{$id_adress},'{$date}',0,'{$dateShipping}','En cours de traitement','Pas encore livré');";

$result2 = mysqli_query($conn, $query);
$query2 = "SELECT LAST_INSERT_ID(id_order) as id_order from ordeer  ORDER BY id_order DESC limit 1;";
$rstt = mysqli_query($conn, $query2);
$roww = mysqli_fetch_array($rstt);
$id_order = $roww['id_order'];

$sql2 = "SELECT * from wishlist join product on (wishlist.id_product = product.id_product) where id_client={$_SESSION['idUser']};";
$rst2 = mysqli_query($conn, $sql2);
while ($row2 = $rst2->fetch_assoc()){
	$id_product = $row2['id_product'];
	$price_product = $row2['price_product'];
	$quantity_wishlist = $row2['quantity_wishlist'];

	$query2 = "INSERT INTO orderdetail(id_order, id_product, product_unit_price, qty) VALUES ({$id_order},{$id_product},{$price_product},{$quantity_wishlist});";
	$result3 = mysqli_query($conn, $query2);
}

$conn->close();

/*require 'Mail/vendor/autoload.php';
require 'Mail/class.phpmailer.php';
$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'm.el_youssfi@mundiapolis.ma';                 // SMTP username
$mail->Password = 'momo1998papa';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('m.el_youssfi@mundiapolis.ma', 'Automatic email');
$mail->addAddress('m.el_outmani@mundiapolis.ma');     // Add a recipient
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = "Nouvelle commande";
$mail->Body    = "Une nouvelle commande a été ajouter !";
if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}*/

header("Location: track.php");
