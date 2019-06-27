<?php 
    session_start();
?>
<!--================Menu Area =================-->
<header class="shop_header_area carousel_menu_area">
    <div class="carousel_menu_inner">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php"><img src="img/logo.jpg" alt="" style="width: 200px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown submenu active">
                                <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                        </li>
                        <li class="nav-item dropdown submenu">
                                <li class="nav-item"><a class="nav-link" href="categories-left-sidebar.php">Produits</a></li>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="shopping-cart2.php">Panier</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <?php if(!isset($_SESSION['idUser'])):?>
                            <li class="nav-item"><a class="nav-link" href="login.php">Se connecter</a></li>
                        <?php else:?>
                            <li class="nav-item"><a class="nav-link" href="login.php">Se deconnecter</a></li>
                        <?php endif;?>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li class="search_icon"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                        <li class="user_icon"><a href="profile_2.php"><i class="icon-user icons"></i></a></li>
                        <li class="cart_cart"><a href="shopping-cart2.php"><i class="icon-handbag icons"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--================End Menu Area =================-->