<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title><?php echo mainTitle; ?></title>
<link rel="stylesheet" href="<?php echo URL_BASE; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>

<?php require_once('components/favicon.php'); ?>
<?php require_once('components/plugins/plugin-analytics.php'); ?>
<?php require_once('components/viewport.php'); ?>

<style>
  body {
    background-image: url('<?php echo URL_BASE; ?>assets/img/fundo.png');
    background-position: center;
    background-size: all;
    background-color: #EB0F7B;
  }
</style>
</head>
<body>

  <div class="container h-100" style="margin: 25px auto;">
    <div class="row h-100 justify-content-center align-items-center">
      <img src="<?php echo URL_BASE; ?>assets/img/logo.png" style="max-width: 250px;">
    </div>

    <div class="row card h-100 justify-content-center align-items-center" style="width: 28rem; margin: 0 auto;">
  <div class="card-body">
    <center><h5 class="card-title">OPS!</h5></center>
    <h6 class="card-subtitle mb-2 text-muted" style="font-size: 1em;">
      O conteudo que você procura está temporariamente indisponível. Mas você pode nos encontrar também nos links a seguir, ou voltar mais tarde.
    </h6>
    <div style="text-align: center;">
      <a 
        href="https://api.whatsapp.com/send?phone=5519999199109" 
        target="_new"
        class="card-link"><img src="<?php echo URL_BASE; ?>assets/img/agradecimento-whatsapp.png"></a>
      <a 
        href="https://facebook.com/soucriador" 
        target="_new" 
        class="card-link"><img src="<?php echo URL_BASE; ?>assets/img/agradecimento-facebook.png"></a>
      <a 
        href="https://instagram.com/eusoucriador" 
        target="_new"
        class="card-link"><img src="<?php echo URL_BASE; ?>assets/img/agradecimento-instagram.png"></a>
    </div>
  </div>
</div>
    
  </div>

</body>
</html>