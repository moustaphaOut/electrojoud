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
                    <h3>checkout method</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="checkout.php">Checkout Method</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================End Categories Banner Area =================-->
        <section class="checkout_method_area p_100">
            <div class="container">
                <div class="row">
                    <div class="checkout_main_area">
                        <div class="checkout_prosses">
                            <div class="row m0">
                                <div class="col-md-6">
                                    <div class="checkout_method">
                                        <h3>check as a guest or register</h3>
                                        <h4>Register with us for future convenience:</h4>
                                         <form role="form" class="radio_area">
                                            <ul class="radio_style">
                                                <li>
                                                    <input type="radio" id="f-option" name="selector">
                                                    <label for="f-option">checkt as guest</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="s-option" name="selector">
                                                    <label for="s-option">register</label>
                                                    <div class="check"><div class="inside"></div></div>
                                                </li>
                                            </ul>
                                          </form>
                                          <h5>register and save time !</h5>
                                          <h6>Register with us for future convenience:</h6>
                                          <a class="checkout_list" href="#"><i class="arrow_carrot-right"></i> Fast and easy check out</a>
                                          <a class="checkout_list" href="#"><i class="arrow_carrot-right"></i> Easy access to your order history and status</a>
                                          <a class="update_btn" href="#"><span>continue</span></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row checkout_from_area">
                                       <h2>already registed ?</h2>
                                       <p>Please log in below :</p>
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="email">Email address <span>*</span></label>
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">Password <span>*</span></label>
                                                <input type="password" class="form-control" id="pwd">
                                            </div>
                                            <h3>* Required Filelds</h3>
                                            <div class="forgot_area">
                                                <button type="submit" class="btn update_btn btn-default">log in</button>
                                                <h4>Forgot Your Password ?</h4>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
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