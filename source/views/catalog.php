<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Jhonattas Henrique">
  <meta name="description" content="Kaka Limpeza">
  <script src="https://kit.fontawesome.com/49b046d3f1.js" crossorigin="anonymous"></script>

  <title><?php echo mainTitle; ?></title> 
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/product-card.css" />
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/fontawesome/css/all.css" />
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/plugin-whatsapp.css" />

  <?php require_once('components/favicon.php'); ?>
  <?php require_once('components/plugins/plugin-analytics.php'); ?>
  <?php require_once('components/viewport.php'); ?>

  <style>
  @import url('<?php echo URL_BASE; ?>assets/css/base.css');
  @import url('<?php echo URL_BASE; ?>assets/css/navbar-top.css');
  @import url('<?php echo URL_BASE; ?>assets/css/sidebar.css');
  @import url('<?php echo URL_BASE; ?>assets/css/footer.css');
</style>

</head>

<body>
  <?php require_once('components/plugins/plugin-whatsapp.php'); ?>
  <?php require_once('components/plugins/plugin-google-tagmanager.php'); ?>
  <?php require_once('components/plugins/plugin-facebook.php'); ?>
  
  <div class="d-flex" id="wrapper">

    <?php require_once("components/sidebar.php"); ?>
    
    <div id="page-content-wrapper">

      <?php require_once("components/navbar-top.php"); ?>
      <div class="container-fluid">
        <div class="row">
          <?php require_once("components/home/home-breadcrumb.php") ?>

          <div class="col-sm-6" style="display: none;">
            <fieldset id="carrinho">
              <legend>Carrinho (clique no produto para remove-lo do carrinho)</legend>
              <div id="itens"></div>
            </fieldset>
          </div>
        </div>

        <div class="row">
          <?php require_once('components/products-foreach.php'); ?>

        </div>
        <div class="row">
          <?php require_once('components/home/home-pagination.php'); ?>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
  <?php require_once('components/footer.php'); ?>
  <!-- Bootstrap core JavaScript -->
  <?php require_once('components/jquery.php'); ?>
  <script src="<?php echo URL_BASE; ?>assets/js/cart.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    <?php require_once('components/buttons-js.php'); ?>
  </script>

</body>

</html>
