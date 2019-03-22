<!--
this is header file which is visible in registration and login page.
-->
<?php
//include_once('link.php');

?>
<!--================Top Header Area =================-->
        <div class="header_top_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
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
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button"><i class="icon-magnifier"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="top_header_middle">
                            <a href="#"><i class="fa fa-phone"></i> Call Us: <span>+84 987 654 321</span></a>
                            <a href="#"><i class="fa fa-envelope"></i> Email: <span>support@yourdomain.com</span></a>
                            <img src="img/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="top_right_header">
                            <ul class="header_social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                            <ul class="top_right">
                                <li class="user"><a href="#"><i class="icon-user icons"></i></a></li>
                                <li class="cart"><a href="#"><i class="icon-handbag icons"></i></a></li>
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
            </div>
        </div>
        <!--================End Top Header Area =================-->
        
        <!--================Menu Area =================-->
        <header class="shop_header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav categories">
                            <li class="nav-item">
                                <select class="selectpicker">
                                    <option>Categories</option>
                                    <?php
                                        include_once('connection.php');
                                        $sql = "SELECT * FROM category;";
                                        $result = mysqli_query($conn, $sql);
                                        if(mysqli_num_rows($result) > 0){
                                          while($row = mysqli_fetch_assoc($result)){
                                            $nameCategorie = $row["name"];
                                            $idCategorie = $row["id_category"];
                                      ?>
                                      <option value="<?php echo $idCategorie;?>"><?php echo $nameCategorie;?></option>
                                      <?php
                                          }
                                        }
                                      ?>
                                </select>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown submenu active">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="index.php">Home Simple</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-carousel.php">Home Carousel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-fullwidth.php">Home Full Width</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-parallax.php">Home Parallax</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-sidebar.php">Home Boxed</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-fixed-menu.php">Home Fixed</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="compare.php">Compare</a></li>
                                    <li class="nav-item"><a class="nav-link" href="checkout.php">Checkout Method</a></li>
                                    <li class="nav-item"><a class="nav-link" href="register.php">Checkout Register</a></li>
                                    <li class="nav-item"><a class="nav-link" href="track.php">Track</a></li>
                                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="404.php">404</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Shop <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
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
                            <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">lookbook</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--================End Menu Area =================-->