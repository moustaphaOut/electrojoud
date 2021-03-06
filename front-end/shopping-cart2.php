<?php
    require_once('connection.php');
    //session_start();
    ?>
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
        <section class="categories_banner_area">
            <div class="container">
                <div class="c_banner_inner" style="padding: 50px 0px">
                    <h3>Panier</h3>
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="shopping-cart2.php">Panier</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Shopping Cart Area =================-->
        <section class="shopping_cart_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart_items">
                            <h3>Articles de pannier</h3>
                            <div class="table-responsive-md">
                                <table class="table">
                                    <tbody>
                                        <?php
                                            $sql = "SELECT *, quantity_wishlist*price_product as tt, sum(quantity_wishlist*price_product) as sum_tt, wishlist.id_product as id_prod FROM wishlist join product on (wishlist.id_product = product.id_product) where id_client={$_SESSION['idUser']} group by wishlist.id_product;";
                                            //var_dump($sql);
                                              $result = mysqli_query($conn, $sql);
                                              while ($row = $result->fetch_assoc()):
                                            ?>
                                        <tr>
                                            <th scope="row">
                                                <div id="<?php echo $row['id_prod'];?>" style='cursor: pointer;' name='delete' onclick='delete_from_cart(this.id)'>
                                                    <img src="img/icon/close-icon.png" alt="">
                                                </div>
                                            </th>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="<?php echo $row["image_product"];?>" alt="" style="height: 150px; width: 150px;">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4><?php echo $row["name_product"];?></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="red"><?php echo $row["price_product"];?></p>DH</td>
                                            <td>
                                                <div class="quantity">
                                                    <h6>Quantity</h6>
                                                    <div class="custom">
                                                        <button id="<?php echo $row['id_prod'];?>" onclick="add_quentity(this.id,'sub')" class="reduced items-count" type="button"><i class="icon_minus-06"></i></button>
                                                        <input type="text" name="qty" id="sst<?php echo $row['id_prod'];?>" maxlength="12" title="Quantity:" class="input-text qty" value="<?php echo $row["quantity_wishlist"];?>">
                                                        <button id="<?php echo $row['id_prod'];?>" onclick="add_quentity(this.id,'add')" class="increase items-count" type="button"><i class="icon_plus"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p><?php echo $row["tt"];?></p>DH</td>
                                        </tr>
                            <?php endwhile;?>
                             <?php
                                $sqlt = "SELECT sum(quantity_wishlist*price_product) as sum_tt FROM wishlist join product on (wishlist.id_product = product.id_product) where id_client={$_SESSION['idUser']};";
                                //var_dump($sqlt);
                                $resultt = mysqli_query($conn, $sqlt);
                                $rowt = $resultt->fetch_assoc();
                                $sum_tt = $rowt["sum_tt"];?>
                                        <tr>
                                            <th scope="row">
                                            </th>
                                        </tr>
                                        <tr class="last">
                                            <th scope="row">
                                                
                                            </th>
                                            <td>
                                                <h6>Totale des articles</h6>
                                            </td>
                                            <td><h6 class="red"><?php echo $sum_tt;?>DH</h6></td>
                                            <td>
                                                <a href="categories-left-sidebar.php"><h3>Continuer mes achats</h3></a>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart_totals_area">
                           
                            <h4>Totale</h4>
                            <div class="cart_t_list">
                                <div class="media">
                                    <div class="d-flex">
                                        <h5>Subtotal</h5>
                                    </div>
                                    <div class="media-body">
                                        <h6 id="totale"><?php echo $sum_tt;?>DH</h6>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="d-flex">
                                        <h5>Prix de livraison</h5>
                                    </div>
                                    <div class="media-body">
                                        <p>GRATUIT</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="d-flex">
                                        
                                    </div>
                                    <div class="media-body">
                                        <select class="selectpicker">
                                            <option>MAROC</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="total_amount row m0 row_disable">
                                <div class="float-left">
                                    Totale
                                </div>
                                <div class="float-right">
                                   <?php echo $sum_tt;?>DH
                                </div>
                            </div>
                        </div>
                        <a type="submit" href="register.php" class="btn subs_btn form-control"><p class="black">Passer la commande</p></a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Shopping Cart Area =================-->

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
  <script src="js/add_cart.js"></script>
    </body>
</html>