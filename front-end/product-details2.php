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
                <div class="c_banner_inner">
                    <h3>simple product Layout 02</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li class="current"><a href="product-details2.php">Simple Product 02</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Product Details Area =================-->
        <section class="product_details_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="product_details_slider">
                            <?php
                                require_once('connection.php');
                            $sql = "SELECT * FROM product where id_product = {$_GET['id']}";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            $name_product = $row["name_product"];
                            $quantity = $row["quantity_product"];
                            $price = $row["price_product"];
                            $description = $row["description_product"];
                            $caracteristique = $row["caracteristique_product"];
                            $image = $row["image_product"];
                            ?>
                            <div id="product_slider2" class="rev_slider" data-version="5.3.1.6">
                                <ul>	<!-- SLIDE  -->
                                    <li data-index="rs-28" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php echo $image;?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Umbrella" data-param1="September 7, 2015" data-param2="Alfon Much, The Precious Stones" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo $image;?>"  alt=""  width="1920" height="1080" data-lazyload="<?php echo $image;?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                   <li data-index="rs-303" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php echo $image;?>"  data-rotate="0"  data-saveperformance="off"  data-title="The Dreaming Girl" data-param1="September 6, 2015" data-param2="Lol" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo $image;?>"  alt=""  width="1920" height="1080" data-lazyload="<?php echo $image;?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-index="rs-301" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php echo $image;?>"  data-rotate="0"  data-saveperformance="off"  data-title="Ride my Bike" data-param1="September 4, 2015" data-param2="Why not another Image?" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo $image;?>"  alt=""  width="1920" height="1080" data-lazyload="<?php echo $image;?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-index="rs-302" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php echo $image;?>"  data-rotate="0"  data-saveperformance="off"  data-title="Ride my Bike" data-param1="September 4, 2015" data-param2="Why not another Image?" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo $image;?>"  alt=""  width="1920" height="1080" data-lazyload="<?php echo $image;?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        
                        <div class="product_details_text">
                            <h3><?php echo $name_product;?></h3>
                            <h6><?php echo $quantity;?> pièces <span>disponibles</span></h6>
                            <p><b>DESCRIPTION:</b><br><?php echo $description;?></p>
                            <p><b>CARACTERISTIQUE:</b><br><?php echo $caracteristique;?></p>
                            <h4><b>Prix: </b><?php echo $price;?>DH</h4>
                            <div class="quantity">
                                <div class="custom">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon_minus-06"></i></button>
                                    <input type="text" name="qty" id="sst" maxlength="12" value="01" title="Quantity:" class="input-text qty">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="icon_plus"></i></button>
                                </div>
                                <a class="add_cart_btn" onclick="add_to_cart(this.id)">Ajouter au panier</a>
                            </div>
                            <div class="shareing_icon">
                                <h5>share :</h5>
                                <ul>
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_pinterest"></i></a></li>
                                    <li><a href="#"><i class="social_instagram"></i></a></li>
                                    <li><a href="#"><i class="social_youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product Details Area =================-->
        
        <!--================Product Description Area =================-->
        <section class="product_description_area">
            <div class="container">
                <nav class="tab_menu">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Product Description</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews (1)</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Tags</a>
                        <a class="nav-item nav-link" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-info" aria-selected="false">additional information</a>
                        <a class="nav-item nav-link" id="nav-gur-tab" data-toggle="tab" href="#nav-gur" role="tab" aria-controls="nav-gur" aria-selected="false">gurantees</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  Emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <h4>Rocky Ahmed</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  Emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  Emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-gur" role="tabpanel" aria-labelledby="nav-gur-tab">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  Emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product Details Area =================-->
        
        <!--================End Related Product Area =================-->
        <section class="related_product_area">
            <div class="container">
                <div class="related_product_inner">
                    <h2 class="single_c_title">Related Product</h2>
                    <div class="row">
                         <?php 
                                    require_once('connection.php');
                                    $sql = "SELECT * FROM product where is_active=1;";
                                      $result = mysqli_query($conn, $sql);
                                      while ($row = $result->fetch_assoc()):
                                    ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src="<?php echo $row["image_product"];?>" alt="" style="height: 200px; width: 300px;">
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" onclick="add_to_cart(this.id)">Ajouter au panier</a></li>
                                        <li class="p_icon"><a href="product-details2.php?id=<?php echo $row["id_product"];?>"><i class="icon_info"></i></a></li>
                                    </ul>
                                    <h4><?php echo $row["name_product"];?></h4>
                                    <h5><?php echo $row["price_product"];?>DH</h5>
                                </div>
                            </div>
                        </div>
                            <?php endwhile;?>
                    </div>
                    <nav aria-label="Page navigation example" class="pagination_area">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                      </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--================End Related Product Area =================-->
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