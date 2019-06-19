<?php 
include 'connection.php';
$idRow = $idDelete='';
if(isset($_GET['idRow']))
  $idRow= $_GET['idRow'];
if(isset($_GET['delete']))
  $idDelete= $_GET['delete'];
$sql = "DELETE FROM product WHERE id_product = '".$idDelete."'";
$result = mysqli_query($conn, $sql);
?>
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
  <link href="css/update.css" rel="stylesheet">
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
  include_once('header.php');
  ?>


  <!--================Categories Product Area =================-->
  <section class="no_sidebar_2column_area">
    <div class="container">
      <div class="row row_disable">
        <?php include_once "menu.php"; ?>
        <div class="col-lg-9 float-md-right" id="cont">
          <div id="frmRegistration">
            <form class="form-horizontal" action="add_product_code.php" method="POST" enctype="multipart/form-data">

              <h1>Gerer les produits</h1>
              <br>
              <table  border="1" >
                <thead class=" table thead-dark">
                  <tr>
                    <th>Nom</th>
                    <th >Brand</th>
                    <th>Caractéristiques</th>
                    <th>Date  de création</th>
                    <th >Déscription</th>
                    <th>Ancien Prix</th>
                    <th>Prix actuel</th>
                    <th>Quantité</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $requete = 'SELECT * FROM product;';
                  $resultat = $conn->query($requete);
                  while ($row = $resultat->fetch_assoc()) :
                    $idR = $row['id_product'];
                    $name = $row['name']; 
                    $brand = $row['brand'];
                    $caracteristique = $row['caracteristique'];
                    $date_c = $row['created_at'];
                    $description = $row['description'];
                    $old_price = $row['old_price'];
                    $price = $row['price'];
                    $quantity = $row['quantity'];
                    ?>
                    <tr scope="row">
                      <th><?php echo $name ?></th>
                      <th><?php echo $brand ?></th>
                      <th><?php echo $caracteristique ?></th>
                      <th><?php echo $date_c ?></th>
                      <th><?php echo $description ?></th>
                      <th><?php echo $old_price ?></th>
                      <th><?php echo $price ?></th>
                      <th><?php echo $quantity ?></th>
                      <th>
                        <a class="btn btn-danger btn-sm" href="supprimer_produit.php?delete=<?php echo $idR; ?>">-</a><a class="btn btn-info btn-sm" class="update_product" id="<?php echo $idR ?>">*</a>
                    <?php endwhile;?>
                  </th>
                </tr>
              </tbody>
            </table>  
          </form>

        </div>
      </div>
    </div>
  </div>

  <!-- POP UP modifier produit-->
  <div class="cadre-updatematiere" >
  <div class="content-updatematiere" style="margin-top : 20px;">
    <div class="x_panel">
      <div class="x_title">
        <h2>Modifier Matiere</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
        <form class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nom de Matiere
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" required="required" class="form-control col-md-7 col-xs-12" id="popup_upmatiere_matiere">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Module
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="last-name" required="required" class="form-control col-md-7 col-xs-12" id="popup_upmatiere_module">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Filiere</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" id="up_select_filiere">
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Volume Horaire
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" min="0" name="last-name" required="required" class="form-control col-md-7 col-xs-12" id="popup_upmatiere_vh">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Coefficient
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" min="0" name="last-name" required="required" class="form-control col-md-7 col-xs-12" id="popup_upmatiere_coeff">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Semestre
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" min="0" name="last-name" required="required" class="form-control col-md-7 col-xs-12" id="popup_upmatiere_semestre">
            </div>
          </div>
        </form>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button" id="cancel-popup-matiere_update">Cancel</button>
            <button class="btn btn-success" id="submit-popup-matiere_update">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- END POP UP modifier produit-->
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
<script src="js/script_update.js"></script>
<script src="js/theme.js"></script>
</body>
</html>
