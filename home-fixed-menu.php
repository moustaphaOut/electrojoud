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
        <link href="vendors/vertical-slider/css/jQuery.verticalCarousel.css" rel="stylesheet">
        
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

    <!--================Home Left Menu Area =================-->
        <div class="home_left_main_area">
            <div class="left_menu">
                <div class="offcanvas_fixed_menu">
                    <div class="top_header_left">
                        <div class="selector">
                            <select class="language_drop" name="countries" id="countries" style="width:300px;">
                              <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                              <option value='yu' data-image="img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                              <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                              <option value='yu' data-image="img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                            </select>
                        </div>
                        <select class="selectpicker usd_select">
                            <option>USD</option>
                            <option>$</option>
                            <option>$</option>
                        </select>
                    </div>
                    <a class="logo_offcanvas" href="#"><img src="img/logo-white.png" alt=""></a>
                    <div class="input-group search_form">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button"><i class="icon-magnifier icons"></i></button>
                        </span>
                    </div>
                    <div class="offcanvas_menu">
                        <ul class="nav flex-column">
                            <li class="dropdown side_menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="index.php">Home Simple</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-carousel.php">Home Carousel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-fullwidth.php">Home Full Width</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-parallax.php">Home Parallax</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-sidebar.php">Home Boxed</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-fixed-menu.php">Home Fixed</a></li>
                                </ul>
                            </li>
                            <li class="dropdown side_menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="compare.php">Compare</a></li>
                                    <li class="nav-item"><a class="nav-link" href="checkout.php">Checkout Method</a></li>
                                    <li class="nav-item"><a class="nav-link" href="register.php">Checkout Register</a></li>
                                    <li class="nav-item"><a class="nav-link" href="track.php">Track</a></li>
                                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="404.php">404</a></li>
                                </ul>
                            </li>
                            <li class="dropdown side_menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-2column.php">Prodcut No Sidebar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-3column.php">Prodcut Two Column</a></li>
                                    <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-4column.php">Product Grid</a></li>
                                    <li class="nav-item"><a class="nav-link" href="categories-left-sidebar.php">Categories Left Sidebar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="categories-right-sidebar.php">Categories Right Sidebar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="categories-grid-left-sidebar.php">Categories Grid Sidebar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="product-details.php">Prodcut Details 01</a></li>
                                    <li class="nav-item"><a class="nav-link" href="product-details2.php">Prodcut Details 02</a></li>
                                    <li class="nav-item"><a class="nav-link" href="product-details3.php">Prodcut Details 03</a></li>
                                    <li class="nav-item"><a class="nav-link" href="shopping-cart.php">Shopping Cart 01</a></li>
                                    <li class="nav-item"><a class="nav-link" href="shopping-cart2.php">Shopping Cart 02</a></li>
                                    <li class="nav-item"><a class="nav-link" href="empty-cart.php">Empty Cart</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">shortcode</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">features</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="cart_list">
                        <ul>
                            <li class="cart_icon"><a href="#"><i class="icon-handbag icons"></i></a></li>
                            <li class="h_price">
                                <select class="selectpicker">
                                    <option>$0.00</option>
                                    <option>$0.00</option>
                                    <option>$0.00</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="right_body">
                <div class="best_summer_banner">
                    <img class="img-fluid" src="img/banner/summer-banner.jpg" alt="">
                    <div class="summer_text">
                        <h3>Best Summer Collection </h3>
                        <p>There is no one who loves to be bread, who looks after it and wants to have it, simply because it is pain.</p>
                        <a class="add_cart_btn" href="#">shop now</a>
                    </div>
                </div>
                <div class="latest_product_3steps">
                    <div class="s_m_title">
                        <h2>Our Latest Product</h2>
                    </div>
                    <div class="l_product_slider owl-carousel">
                        <div class="item">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="img/product/l-product-9.jpg" alt="">
                                    <h5 class="sale">Sale</h5>
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Womens Libero</h4>
                                    <h5><del>$45.50</del>  $40</h5>
                                </div>
                            </div>
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="img/product/l-product-10.jpg" alt="">
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Oxford Shirt</h4>
                                    <h5>$85.50</h5>
                                </div>
                            </div>
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="img/product/l-product-11.jpg" alt="">
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Oxford Shirt</h4>
                                    <h5>$85.50</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="img/product/l-product-12.jpg" alt="">
                                    <h5 class="new">New</h5>
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Travel Bags</h4>
                                    <h5><del>$45.50</del>  $40</h5>
                                </div>
                            </div>
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="img/product/l-product-13.jpg" alt="">
                                    <h5 class="sale">Sale</h5>
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>High Heel</h4>
                                    <h5><del>$130.50</del>  $110</h5>
                                </div>
                            </div>
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="img/product/l-product-14.jpg" alt="">
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>High Heel</h4>
                                    <h5><del>$130.50</del>  $110</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="img/product/l-product-15.jpg" alt="">
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Summer Dress</h4>
                                    <h5>$45.05</h5>
                                </div>
                            </div>
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="img/product/l-product-16.jpg" alt="">
                                    <h5 class="sale">Sale</h5>
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Fossil Watch</h4>
                                    <h5>$250.00</h5>
                                </div>
                            </div>
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="img/product/l-product-17.jpg" alt="">
                                    <h5 class="sale">Sale</h5>
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Fossil Watch</h4>
                                    <h5>$250.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="img/product/l-product-18.jpg" alt="">
                                    <h5 class="sale">Sale</h5>
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Nike Shoes</h4>
                                    <h5><del>$130</del> $110</h5>
                                </div>
                            </div>
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="img/product/l-product-19.jpg" alt="">
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Ricky Shirt</h4>
                                    <h5>$45.05</h5>
                                </div>
                            </div>
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="img/product/l-product-20.jpg" alt="">
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Ricky Shirt</h4>
                                    <h5>$45.05</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="feature_box_area">
                    <div class="row m0">
                        <div class="col-lg-6">
                            <div class="f_add_item white_add">
                                <div class="f_add_img"><img class="img-fluid" src="img/feature-add/f-add-8.jpg" alt=""></div>
                                <div class="f_add_hover">
                                    <h4>Best Summer <br>Collection</h4>
                                    <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="f_add_item white_add">
                                <div class="f_add_img"><img class="img-fluid" src="img/feature-add/f-add-9.jpg" alt=""></div>
                                <div class="f_add_hover">
                                    <h4>Best Summer <br>Collection</h4>
                                    <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include 'footer.php';
                ?>
                
            </div>
        </div>
        <!--================End Home Left Menu Area =================-->
            
        
        
        
        
        
        
        
        
        
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