<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title><?php echo mainTitle; ?></title>
<?php require_once('components/template-base.php'); ?>

<link rel="stylesheet" href="<?php echo URL_BASE; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/homepage.css" />
<link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/product-card.css" />
<link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/lightbox.css" />
<link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/plugin-whatsapp.css" />

<?php require_once('components/favicon.php'); ?>
<?php require_once('components/plugins/plugin-analytics.php'); ?>
<?php require_once('components/viewport.php'); ?>

<style>
  @import url('<?php echo URL_BASE; ?>assets/css/base.css');
  @import url('<?php echo URL_BASE; ?>assets/css/navbar-top.css');
  @import url('<?php echo URL_BASE; ?>assets/css/sidebar.css');
  @import url('<?php echo URL_BASE; ?>assets/css/footer.css');

  @import url('<?php echo URL_BASE; ?>assets/css/product-details.css');
</style>
</head>
<body>
  <?php 
    if((!isset ($_SESSION['cart']) == true) /*and (!isset ($_SESSION['senha']) == true) */) {
      unset($_SESSION['cart']);
      // unset($_SESSION['senha']);
      // header('location:index.php');
      // echo 'NÃO ESTA SETADO';
    } else {
      // echo 'ESTA SETADO';
    }
  ?>
  <?php require_once('components/plugins/plugin-whatsapp.php'); ?>
  <?php require_once('components/plugins/plugin-google-tagmanager.php'); ?>
  <?php require_once('components/plugins/plugin-facebook.php'); ?>

  <div class="d-flex" id="wrapper">

    <?php require_once("components/sidebar.php"); ?>
    
    <div id="page-content-wrapper">

      <?php require_once("components/navbar-top.php"); ?>
      <div class="container-fluid">
        <div class="card mt-4 productMainInformation">
          <div class="card-body">
            <h3 class="card-title"><b><?php echo $product->title; ?></b></h3>
              <table class="table is-striped is-fullwidth">
                <tbody>
                  <tr>
                    <th scope="row">CÓDIGO INTERNO</th>
                    <td>KAK-<?php echo $product->store_id; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">PRODUTO</th>
                    <td><?php echo $product->title; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">DETALHES</th>
                    <td><?php echo $product->description; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Quantidade</th>
                    <td><?php echo $product->volume; ?></td>
                  </tr>
                  
                  <?php if($product->price != "0") {?>
                    <tr>
                      <th scope="row">VALOR</th>
                      <td>R$ <?php echo $product->price; ?></td>
                    </tr>
                  <?php } ?>
  
                  <?php if($product->obs != "null") {?>
                    <tr>
                      <th scope="row">DETALHES</th>
                      <td v-html="product.obs"><?php echo html_entity_decode($product->obs); ?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->

            <div class="card mt-4 boxImages">
              <div class="row">
                <?php foreach ($product->product_images as $productImage):?>
                  <a 
                  class="card col productImage"
                  style="background-image: url('<?php echo API_IMAGES . $productImage->url; ?>')"
                  href="<?php echo API_IMAGES . $productImage->url; ?>" 
                  data-lightbox="products"
                  data-title="<?php echo $product->title; ?>">
                &nbsp;</a>
              <?php endforeach; ?>

            </div>
          </div>

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Compartilhar
            </div>
            <div class="card-body">
              <a
              href="<?php echo 'https://facebook.com/sharer/sharer.php?u=https://soucriador.com/produto/' . $product->id;?>"
              class="btn btn-primary" target="facebook">
            facebook</a>

            <a href="#" class="btn btn-success">whatsapp</a>
            <a href="#" class="btn btn-dark">imprimir</a>
            <a
            class="btn btn-light"
            href="<?php echo URL_BASE . 'produtos';?>">
            voltar
          </a>
        </div>
      </div>
      <!-- /.card -->

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