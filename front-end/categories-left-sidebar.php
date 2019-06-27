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
            <div class="container" style="padding:0px;">
                <div class="c_banner_inner">
                    <h3>Produits listes</h3>
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Produits</a></li>
                        <li class="current"><a href="#">Produits listes</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Categories Product Area =================-->
        <section class="categories_product_main p_80">
            <div class="container">
                <div class="categories_main_inner">
                    <div class="row row_disable">
                        <div class="col-lg-9 float-md-right">
                            <div class="showing_fillter">
                                <div class="row m0">
                                    <div class="first_fillter">
                                        <h4>Showing 1 to 12 of 30 total</h4>
                                    </div>
                                    <div class="secand_fillter">
                                        <h4>SORT BY :</h4>
                                        <select class="selectpicker">
                                            <option>Name</option>
                                            <option>Name 2</option>
                                            <option>Name 3</option>
                                        </select>
                                    </div>
                                    <div class="third_fillter">
                                        <h4>Show : </h4>
                                        <select class="selectpicker">
                                            <option>09</option>
                                            <option>10</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div class="four_fillter">
                                        <h4>View</h4>
                                        <a  href="categories-grid-left-sidebar.php"><i class="icon_grid-2x2"></i></a>
                                        <a class="active" href="categories-left-sidebar.php"><i class="icon_grid-3x3"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="categories_product_area">
                                <div class="row">
                                 <?php 
                                    require_once('connection.php');
                                    if(isset($_GET['c']) && !empty($_GET['c']))
                                        $sql = "SELECT * FROM product where is_active=1 and id_category={$_GET['c']};";
                                    else
                                        $sql = "SELECT * FROM product where is_active=1";

                                      $result = mysqli_query($conn, $sql);
                                      while ($row = $result->fetch_assoc()):
                                    ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="l_product_item">
                                            <div class="l_p_img">
                                                <a href="product-details2.php?id=<?php echo $row["id_product"];?>"><img src="<?php echo $row["image_product"];?>" alt="" style="height: 200px; width: 300px;"></a>
                                                <h5 class="sale">Sale</h5>
                                            </div>
                                            <div class="l_p_text">
                                               <ul class="c_product_btn">
                                                    <li><a id="<?php echo $row["id_product"];?>" class="add_cart_btn" onclick="add_to_cart(this.id)">Ajouter au panier</a></li>
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
                        <div class="col-lg-3 float-md-right">
                            <div class="categories_sidebar">
                                <aside class="l_widgest l_p_categories_widget">
                                    <div class="l_w_title">
                                        <h3>Categories</h3>
                                    </div>
                                    
                                    <ul class="navbar-nav">
                                        <?php 
                                            $sql = "SELECT * FROM category where id_sup_cat is null";
                                              $result = mysqli_query($conn, $sql);
                                              while ($row = $result->fetch_assoc()):
                                            ?>
                                        <li id="<?php echo $row['id_category'];?>" class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="categories-left-sidebar.php?c=<?php echo $row['id_category'];?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?php echo $row['name_category'];?>
                                            <i class="icon_plus" aria-hidden="true"></i>
                                            <i class="icon_minus-06" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <?php 
                                                $sql2 = "SELECT * FROM category where id_sup_cat={$row['id_category']}";
                                                  $result2 = mysqli_query($conn, $sql2);
                                                  while ($row2 = $result2->fetch_assoc()):
                                                ?>
                                                <li id="<?php echo $row['id_sup_cat'];?>" class="nav-item"><a class="nav-link" href="categories-left-sidebar.php?c=<?php echo $row2['id_category'];?>"><?php echo $row2['name_category'];?></a></li>
                                            <?php endwhile;?>
                                            </ul>
                                        </li>
                                        <?php endwhile;?>
                                    </ul>

                                </aside>
                                
                                
                                <aside class="l_widget l_news_widget">
                                    <h3>Nouveaux produits ?</h3>
                                    <p>Inserer votre email pour être informé sur nos nouveaux produits !</p>
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="yourmail@domain.com" aria-label="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary subs_btn" type="button">Je veux être informer</button>
                                        </span>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Categories Product Area =================-->

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