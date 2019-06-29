<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Persuit</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <?php
    include 'header.php';
    ?>
        
        <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>Mes commandes</h3>
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="track.php">Mes commandes</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <br>
        <!--================End Categories Banner Area =================-->
        <?php if(isset($_SESSION['idUser'])):?>
            <section class="solid_banner_area">
                <div class="container">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Num de commande</th>
                          <th scope="col">nom de client</th>
                          <th scope="col">Date de commande</th>
                          <th scope="col">Date de livraison</th>
                          <th scope="col">Status de livraison</th>
                          <th scope="col">Totale a payer</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        require_once('connection.php');
                        $sqll = "SELECT * from client where id_client={$_SESSION['idUser']};";
                        $rsst = mysqli_query($conn, $sqll);
                        $roow = mysqli_fetch_array($rsst);
                        $client_name = $roow['nom_client']." ".$roow['prenom_client'];

                        $requtte = "SELECT * FROM ordeer where id_client={$_SESSION['idUser']};";
                        $result = mysqli_query($conn, $requtte);
                        while ($row = $result->fetch_assoc()):
                        $sql = "SELECT sum(qty*product_unit_price) as sum_tt FROM orderdetail where id_order={$row['id_order']};";
                        //var_dump($sql);
                        $rst = mysqli_query($conn, $sql);
                        $row2 = $rst->fetch_assoc();
                        ?>
                        <tr>
                          <th scope="row"><?php echo $row['id_order'];?></th>
                          <td><?php echo $client_name;?></td>
                          <td><?php echo $row['order_date'];?></td>
                          <td><?php echo $row['shipping_date'];?></td>
                          <td><?php echo $row['shipping_status'];?></td>
                          <td><?php echo $row2['sum_tt'];?></td>
                        </tr>
                    <?php endwhile;?>
                      </tbody>
                    </table>
                </div>
        </section>
        <?php else:?>
        <!--================Track Area =================-->
        <section class="track_area p_100">
            <div class="container">
                <div class="track_inner">
                    <div class="track_title">
                        <h2>Track Your Item</h2>
                        <p> Donec sed tortor eros. Mauris varius commodo nisi, quis vestibulum est pellen-tesque quis. Vivamus nulla arcu, </p>
                    </div>
                    <form class="track_form row">
                        <div class="col-lg-12 form-group">
                            <label for="text">Order ID</label>
                            <input class="form-control" type="text" id="text">
                        </div>
                        <div class="col-lg-12 form-group">
                            <label for="email">billing email</label>
                            <input class="form-control" type="email" id="email">
                        </div>
                        <div class="col-lg-12 form-group">
                            <button type="submit" value="submit" class="btn subs_btn form-control">place order</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--================End Track Area =================-->
        <?php endif;?>

    <?php
    include 'footer.php';
    ?>
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>