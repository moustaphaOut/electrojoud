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
    include_once('header2.php');
    ?>
        
        <!--================Home Carousel Area =================-->
        <section class="home_carousel_area">
            <div class="home_carousel_slider owl-carousel">
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="img/home-carousel/home-c-1.jpg" alt="">
                        <div class="carousel_hover">
                            <h3>mens bag</h3>
                            <h4>We feature the best professional bags </h4>
                            <h5>Including:</h5>
                            <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                            <a class="discover_btn" href="#">discover now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="img/home-carousel/home-c-2.jpg" alt="">
                        <div class="carousel_hover">
                            <h3>mens bag</h3>
                            <h4>We feature the best professional bags </h4>
                            <h5>Including:</h5>
                            <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                            <a class="discover_btn" href="#">discover now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="img/home-carousel/home-c-3.jpg" alt="">
                        <div class="carousel_hover">
                            <h3>mens bag</h3>
                            <h4>We feature the best professional bags </h4>
                            <h5>Including:</h5>
                            <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                            <a class="discover_btn" href="#">discover now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="img/home-carousel/home-c-4.jpg" alt="">
                        <div class="carousel_hover">
                            <h3>mens bag</h3>
                            <h4>We feature the best professional bags </h4>
                            <h5>Including:</h5>
                            <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                            <a class="discover_btn" href="#">discover now</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="h_carousel_item">
                        <img src="img/home-carousel/home-c-5.jpg" alt="">
                        <div class="carousel_hover">
                            <h3>mens bag</h3>
                            <h4>We feature the best professional bags </h4>
                            <h5>Including:</h5>
                            <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                            <a class="discover_btn" href="#">discover now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Carousel Area =================-->
        
        <!--================Special Offer Area =================-->
        <section class="special_offer_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_offer_item">
                            <img class="img-fluid" src="img/feature-add/special-offer-1.jpg" alt="">
                            <div class="hover_text">
                                <h4>Special Offer</h4>
                                <h5>Young Couple</h5>
                                <a class="shop_now_btn" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="special_offer_item2">
                            <img class="img-fluid" src="img/feature-add/special-offer-2.jpg" alt="">
                            <div class="hover_text">
                                <h5>girls bag</h5>
                                <a class="shop_now_btn" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Special Offer Area =================-->
        
        <!--================Latest Product isotope Area =================-->
        <section class="fillter_latest_product">
            <div class="container">
                <div class="single_c_title">
                    <h2>Our Latest Product</h2>
                </div>
                <div class="fillter_l_p_inner">
                    <ul class="fillter_l_p">
                        <li class="active" data-filter="*"><a href="#">men's</a></li>
                        <li data-filter=".woman"><a href="#">Woman</a></li>
                        <li data-filter=".acc"><a href="#">Accessories</a></li>
                        <li data-filter=".shoes"><a href="#">Shoes</a></li>
                        <li data-filter=".bags"><a href="#">Bags</a></li>
                    </ul>
                    <div class="row isotope_l_p_inner">
                        <div class="col-lg-3 col-md-4 col-sm-6 woman bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="img/product/l-product-1.jpg" alt="">
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
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 acc shoes">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="img/product/l-product-2.jpg" alt="">
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
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 woman shoes">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="img/product/l-product-3.jpg" alt="">
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
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 woman shoes">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="img/product/l-product-4.jpg" alt="">
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
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 woman shoes">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="img/product/l-product-5.jpg" alt="">
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
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 acc shoes bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="img/product/l-product-6.jpg" alt="">
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
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 acc bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="img/product/l-product-7.jpg" alt="">
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
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 acc bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="img/product/l-product-8.jpg" alt="">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Latest Product isotope Area =================-->
        
        <!--================Product_listing Area =================-->
        <section class="product_listing_area">
            <div class="container">
                <div class="row p_listing_inner">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-6 col-sm-8">
                                <div class="p_list_text">
                                    <h3>Men</h3>
                                    <ul>
                                        <li><a href="#">Down Jackets</a></li>
                                        <li><a href="#">Hoodies</a></li>
                                        <li><a href="#">Suits</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Casual Pants</a></li>
                                        <li><a href="#">Sunglass</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-4">
                                <div class="p_list_img">
                                    <img src="img/product/p-categories-list/product-l-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-6 col-sm-8">
                                <div class="p_list_text">
                                    <h3>Women</h3>
                                    <ul>
                                        <li><a href="#">Down Jackets</a></li>
                                        <li><a href="#">Hoodies</a></li>
                                        <li><a href="#">Suits</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Casual Pants</a></li>
                                        <li><a href="#">Sunglass</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-4">
                                <div class="p_list_img">
                                    <img src="img/product/p-categories-list/product-l-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-6 col-sm-8">
                                <div class="p_list_text">
                                    <h3>Accessories</h3>
                                    <ul>
                                        <li><a href="#">Down Jackets</a></li>
                                        <li><a href="#">Hoodies</a></li>
                                        <li><a href="#">Suits</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Casual Pants</a></li>
                                        <li><a href="#">Sunglass</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-4">
                                <div class="p_list_img">
                                    <img src="img/product/p-categories-list/product-l-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product_listing Area =================-->
        
        <!--================Featured Product Area =================-->
        <section class="feature_product_area">
            <div class="container">
                <div class="f_p_inner">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="f_product_left">
                                <div class="s_m_title">
                                    <h2>Featured Products</h2>
                                </div>
                                <div class="f_product_inner">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/featured-product/f-p-1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Oxford Shirt</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/featured-product/f-p-2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Puffer Jacket</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/featured-product/f-p-3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Leather Bag</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/featured-product/f-p-4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Casual Shoes</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="fillter_slider_inner">
                                <ul class="portfolio_filter">
                                    <li class="active" data-filter="*"><a href="#">men's</a></li>
                                    <li data-filter=".woman"><a href="#">Woman</a></li>
                                    <li data-filter=".shoes"><a href="#">Shoes</a></li>
                                    <li data-filter=".bags"><a href="#">Bags</a></li>
                                </ul>
                                <div class="fillter_slider owl-carousel">
                                    <div class="item shoes">
                                        <div class="fillter_product_item bags">
                                            <div class="f_p_img">
                                                <img src="img/product/fillter-product/f-product-1.jpg" alt="">
                                                <h5 class="sale">Sale</h5>
                                            </div>
                                            <div class="f_p_text">
                                                <h5>Nike Max Air Vapor Power</h5>
                                                <h4>$45.05</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item woman shoes bags">
                                        <div class="fillter_product_item">
                                            <div class="f_p_img">
                                                <img src="img/product/fillter-product/f-product-2.jpg" alt="">
                                                <h5 class="new">New</h5>
                                            </div>
                                            <div class="f_p_text">
                                                <h5>Fossil Watch</h5>
                                                <h4><del>$250</del> $110</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item woman shoes">
                                        <div class="fillter_product_item">
                                            <div class="f_p_img">
                                                <img src="img/product/fillter-product/f-product-3.jpg" alt="">
                                                <h5 class="discount">-10%</h5>
                                            </div>
                                            <div class="f_p_text">
                                                <h5>High Heel</h5>
                                                <h4>$45.05</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item shoes">
                                        <div class="fillter_product_item bags">
                                            <div class="f_p_img">
                                                <img src="img/product/fillter-product/f-product-1.jpg" alt="">
                                                <h5 class="sale">Sale</h5>
                                            </div>
                                            <div class="f_p_text">
                                                <h5>Nike Max Air Vapor Power</h5>
                                                <h4>$45.05</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item woman shoes bags">
                                        <div class="fillter_product_item">
                                            <div class="f_p_img">
                                                <img src="img/product/fillter-product/f-product-2.jpg" alt="">
                                                <h5 class="new">New</h5>
                                            </div>
                                            <div class="f_p_text">
                                                <h5>Fossil Watch</h5>
                                                <h4><del>$250</del> $110</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item woman shoes">
                                        <div class="fillter_product_item">
                                            <div class="f_p_img">
                                                <img src="img/product/fillter-product/f-product-3.jpg" alt="">
                                                <h5 class="discount">-10%</h5>
                                            </div>
                                            <div class="f_p_text">
                                                <h5>High Heel</h5>
                                                <h4>$45.05</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item shoes">
                                        <div class="fillter_product_item bags">
                                            <div class="f_p_img">
                                                <img src="img/product/fillter-product/f-product-1.jpg" alt="">
                                                <h5 class="sale">Sale</h5>
                                            </div>
                                            <div class="f_p_text">
                                                <h5>Nike Max Air Vapor Power</h5>
                                                <h4>$45.05</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item woman shoes bags">
                                        <div class="fillter_product_item">
                                            <div class="f_p_img">
                                                <img src="img/product/fillter-product/f-product-2.jpg" alt="">
                                                <h5 class="new">New</h5>
                                            </div>
                                            <div class="f_p_text">
                                                <h5>Fossil Watch</h5>
                                                <h4><del>$250</del> $110</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item woman shoes">
                                        <div class="fillter_product_item">
                                            <div class="f_p_img">
                                                <img src="img/product/fillter-product/f-product-3.jpg" alt="">
                                                <h5 class="discount">-10%</h5>
                                            </div>
                                            <div class="f_p_text">
                                                <h5>High Heel</h5>
                                                <h4>$45.05</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Featured Product Area =================-->
        
        <!--================Form Blog Area =================-->
        <section class="from_blog_area">
            <div class="container">
                <div class="from_blog_inner">
                    <div class="c_main_title">
                        <h2>From The Blog</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="from_blog_item">
                                <img class="img-fluid" src="img/blog/from-blog/f-blog-1.jpg" alt="">
                                <div class="f_blog_text">
                                    <h5>fashion</h5>
                                    <p>Neque porro quisquam est qui dolorem ipsum</p>
                                    <h6>21.09.2017</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="from_blog_item">
                                <img class="img-fluid" src="img/blog/from-blog/f-blog-2.jpg" alt="">
                                <div class="f_blog_text">
                                    <h5>fashion</h5>
                                    <p>Neque porro quisquam est qui dolorem ipsum</p>
                                    <h6>21.09.2017</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="from_blog_item">
                                <img class="img-fluid" src="img/blog/from-blog/f-blog-3.jpg" alt="">
                                <div class="f_blog_text">
                                    <h5>fashion</h5>
                                    <p>Neque porro quisquam est qui dolorem ipsum</p>
                                    <h6>21.09.2017</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Form Blog Area =================-->
        <?php include"footer.php" ?>
        
        
        
        
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