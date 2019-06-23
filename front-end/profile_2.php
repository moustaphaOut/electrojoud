<?php
    require_once('connection.php');
    $idRow = '';
if(isset($_GET['idRow'])){
    $idRow= $_GET['idRow'];
}
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


        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="x_panel">
                    <div class="x_title">
                        <h2><small>Profile d'utilisateur</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                </div>
                            </div>

                            <!-- end of skills -->
                            <?php 
                                $query = "SELECT * FROM client where id_client={$_SESSION['idUser']};";
                                var_dump($query);
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_array($result);
                                $idR = $row['id_client'];
                                $nom = $row['nom_client'];
                                $prenom = $row['prenom_client'];
                                $email = $row['email_client'];
                                $password = $row['password_client'];
                                $image = $row['image_client'];
                                $phone = $row['telephone_client'];
                                $query2 = "SELECT * FROM adress where id_client={$_SESSION['idUser']};";
                                $result2 = mysqli_query($conn, $query2);
                                $row2 = mysqli_fetch_array($result2);
                                $adresse = $row2['adresse'];
                                $city = $row2['city'];
                                $postcode = $row2['postcode'];
                            ?>

                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="<?php echo $image ?>" alt="" class="img-rounded img-responsive" style="height: 250px; width: 250px;"/>
                    </div>

                        <div class="col-sm-6 col-md-8">

                            <h3><?php echo $nom.' '.$prenom ?></h3>

                            
                            <p>
                                <i class="glyphicon glyphicon-envelope"></i><b>Email:</b> <?php echo $email ?>
                                <br />
                                <i class="glyphicon glyphicon-globe"></i><b>Phone number:</b> <?php echo $phone ?>
                                <br />
                                <i class="glyphicon glyphicon-gift"></i>
                            </p>
                            <cite title="San Francisco, USA">
                                <i class="glyphicon glyphicon-map-marker"><b>Adresse:</b> <?php echo $adresse;?></i><br>
                                <i class="glyphicon glyphicon-map-marker"><b>City:</b> <?php echo $city;?></i><br>
                                <i class="glyphicon glyphicon-map-marker"><b>Postcode:</b> <?php echo $postcode;?></i><br>
                            </cite>

                            <a class="btn btn-info btn-sm" href="profile_2.php?idRow=<?php echo $idR; ?>"><i class="fa fa-edit m-right-xs"></i>Editer Profile</a>
                            <br />
                        
                            <?php 

                            if(!empty($idRow)):
                            
                                $query = "SELECT * FROM client where id_client={$idRow}";
                                //var_dump($query);
                                $resultat = mysqli_query($conn, $query);
                                $row1 = mysqli_fetch_array($resultat);
                                $idR = $row1['id_client'];
                                $nom = $row1['nom_client'];
                                $prenom = $row1['prenom_client'];
                                $email = $row1['email_client'];
                                $password = $row1['password_client'];
                                $image = $row1['image_client'];
                                $phone = $row1['telephone_client'];
                                $query2 = "SELECT * FROM adress where id_client={$_SESSION['idUser']};";
                                $result2 = mysqli_query($conn, $query2);
                                $row2 = mysqli_fetch_array($result2);
                                $adresse = $row2['adresse'];
                                $city = $row2['city'];
                                $postcode = $row2['postcode'];

                                ?>
                                <div class="row justify-content-center">
                                    <div class="md-form mb-5">
                                        <form method="post" action="update_profile.php" enctype="multipart/form-data">
                                            <div class="modal-header tex">
                                                <h4 class="modal-title w-100 font-weight-bold"><strong>Modifier</strong>
                                                </h4>
                                            </div>
                                            <div hidden>
                                                <i>id</i>
                                                <input value="<?php echo $idR ?>" name="id" type="text" class="form-control validate" >
                                            </div>
                                            <br>
                                            <i>Prenom</i>
                                            <input value="<?php echo $prenom ?>" name="prenom" type="text"
                                                   class="form-control validate" required><br>
                                            <i>Nom</i>
                                            <input value="<?php echo $nom ?>" name="nom" type="text"
                                                   class="form-control validate" required><br>
                                            <i>Email</i>
                                            <input value="<?php echo $email ?>" name="mail" type="email"
                                                   class="form-control validate" required><br>
                                            <i>Password</i>
                                            <input value="<?php echo $password ?>" name="password" type="password"
                                                   class="form-control validate"><br>
                                            <i>phone</i>
                                            <input value="<?php echo $phone ?>" name="phone" type="text"
                                                   class="form-control validate"><br>
                                            <i>Adresse</i>
                                            <input value="<?php echo $adresse ?>" name="adress" type="text"
                                                   class="form-control validate"><br>
                                            <i>city</i>
                                            <input value="<?php echo $city ?>" name="city" type="text"
                                                   class="form-control validate"><br>
                                            <i>postcode</i>
                                            <input value="<?php echo $postcode ?>" name="postcode" type="text"
                                                   class="form-control validate"><br>
                                            <i>image</i>
                                            <input value="<?php echo $image;?>" name="file" type="file"
                                                   class="form-control validate"><br>        
                                            <i></i>
                                            <input type="submit" value="Confirmer" class="btn btn-info"
                                                   class="fa fa-edit m-right-xs" align="right">
                                        </form>
                                    </div>
                                </div>
                        </div>

<?php endif; ?>
                </div>
            </div>
      </div>
      <!-- End of Main Content -->
<br>
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