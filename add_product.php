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
    include_once('header2.php');
    ?>
        
        <!--================Categories Banner Area =================-->
        <section class="categories_banner_area">
            <div class="container">
                <div class="c_banner_inner">
                    <h3>shop grid with left sidebar</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li class="current"><a href="#">Shop Grid with Left Sidebar</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Categories Product Area =================-->
        <section class="no_sidebar_2column_area">
            <div class="container">
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
                            <a class="active" href="#"><i class="icon_grid-2x2"></i></a>
                            <a href="#"><i class="icon_grid-3x3"></i></a>
                        </div>
                    </div>
                <div id="frmRegistration">
                    <form class="form-horizontal" action="add_product_code.php" method="POST" enctype="multipart/form-data">
                        <br><br>
                        <h1>Ajouter un produit</h1>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Nom de produit:</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" class="form-control" placeholder="Le nom de votre produit" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">brand:</label>
                            <div class="col-sm-6">
                                <input type="text" name="brand" class="form-control" placeholder="Le nom de votre produit" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Description:</label>
                            <div class="col-sm-6">
                              <input type="text" name="description" class="form-control" placeholder="Une description de votre produit">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">caracteristique:</label>
                            <div class="col-sm-6">
                              <input type="text" name="caracteristique" class="form-control" placeholder="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Old prix:</label>
                            <div class="col-sm-6">
                              <input type="number" name="old_price" class="form-control" min="0" required>
                            </div>
                        </div>                  
                        <div class="form-group">
                            <label class="control-label col-sm-2" >prix:</label>
                            <div class="col-sm-6">
                              <input type="number" name="price" class="form-control" min="0" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >quantité:</label>
                            <div class="col-sm-6">
                              <input type="number" name="quantity" class="form-control" min="1" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >On ligne:</label>
                            <div class="col-sm-6">
                                <select name="is_active">
                                  <option value="1">Oui</option>
                                  <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Image:</label>
                            <div class="col-sm-6">
                              <input type="file" name="file" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Categorie:</label>
                            <div class="col-sm-6">
                                <div class="col-sm-6">
                                    <select name="id_categorie">
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
                                </div>
                          
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </div>
                    </form>
                </div>


                </div>
            </div>
        </section>
        <!--================End Categories Product Area =================-->
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