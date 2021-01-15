<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title><?php echo mainTitle; ?> - Perfil</title>
<?php require_once('components/template-base.php'); ?>

<link rel="stylesheet" href="<?php echo URL_BASE; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/product-card.css" />
<link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/plugin-whatsapp.css" />

<?php require_once('components/favicon.php'); ?>
<?php require_once('components/plugins/plugin-analytics.php'); ?>
<?php require_once('components/viewport.php'); ?>

<style>
  @import url('<?php echo URL_BASE; ?>assets/css/base.css');
  @import url('<?php echo URL_BASE; ?>assets/css/homepage.css');
  @import url('<?php echo URL_BASE; ?>assets/css/navbar-top.css');
  @import url('<?php echo URL_BASE; ?>assets/css/sidebar.css');
  @import url('<?php echo URL_BASE; ?>assets/css/footer.css');
</style>
</head>
<body>
  <?php require_once('components/session-check.php'); ?>
  <?php require_once('components/plugins/plugin-whatsapp.php'); ?>
  <?php require_once('components/plugins/plugin-google-tagmanager.php'); ?>
  <?php require_once('components/plugins/plugin-facebook.php'); ?>

  <div class="d-flex wrapper-first" id="wrapper">
    <?php require_once("components/sidebar.php"); ?>

    <div id="page-content-wrapper">
      <?php require_once("components/navbar-top.php"); ?>
      <div class="container-fluid" style="text-align: center; margin-top: 100px;">
        <!-- inicio do conteudo da home -->

        <h1>Seus pedidos vão aparecer aqui em breve.</h1>
        <h4>Volte novamente mais tarde. Ou acompanhe nossas redes sociais para mais novidades.</h4>

        <!-- fim do conteudo da home -->
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
    window.onload = $("#wrapper").toggleClass("toggled");
    <?php require_once('components/buttons-js.php'); ?>
  </script>

</body>
</html>