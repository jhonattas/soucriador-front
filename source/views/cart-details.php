<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title><?php echo mainTitle; ?></title>
  <?php require_once('components/template-base.php'); ?>

  <link rel="stylesheet" href="<?php echo URL_BASE; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/homepage.css" />
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/product-card.css" />
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/plugin-whatsapp.css" />
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/cart.css" />


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

      <div class="row" style="margin: 10px 30px;">
        
        <!-- inicia o carrinho -->

          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col" style="background-color:  #EB0F7B !important; border: none; border-radius: 15px 0 0 15px;">#</th>
                <th scope="col" style="background-color:  #EB0F7B !important; border: none;" >Produto</th>
                <th scope="col" style="background-color:  #EB0F7B !important; border: none;">Preço</th>
                <th scope="col" style="background-color:  #EB0F7B !important; border: none; border-radius: 0 15px 15px 0;">Ação</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($_SESSION["cart"] as $key=>$product):?>
                <tr id="product<?php echo $key; ?>" class="product-line">
                  <th scope="row"><?php echo $product["storeID"]; ?></th>
                  <td><?php echo $product["productTitle"]; ?></td>
                  <td>R$ <?php echo floatval($product["productPrice"]); ?></td>
                  <td>
                    <button 
                      type="button" 
                      class="btn btn-danger btn-sm"
                      onclick="removeProductFromCart(<?php echo $key; ?>)" 
                      id="buttonRemover"><i class="fas fa-times-circle"></i></button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <!-- finaliza o carrinho-->
        <br/>

        <div 
          class=""
          style="text-align: right; width: 100%; border-top: 1px solid #cccccc; padding-top: 1em;">
          <button 
            onclick="limpaCarrinho()"
            style="text-align: right;" 
            class="btn btn-danger">Limpar Itens</button>

          <button 
            onclick=""
            style="text-align: right;" 
            class="btn btn-warning" id="buttonCreateProduct">Criar Pedido</button>
        </div>
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
<script src="<?php echo URL_BASE; ?>assets/js/product.js"></script>

<!-- Menu Toggle Script -->
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    // não vai mostrar o menu no inicio
    $("#wrapper").toggleClass("toggled");
  });
  <?php require_once('components/buttons-js.php'); ?>
</script>

</body>
</html>