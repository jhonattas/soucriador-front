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

            <div class="card mt-4" style="margin-top: 0px !important; padding-top: 0px !important; background-color: #ffffff;">
          <img class="card-img-top img-fluid" src="assets/img/topo-stores.png" alt="">
          <div class="card-body">
            <h3 class="card-title">KAKA LIMPEZA - Loja 01</h3>
            <a href="https://goo.gl/maps/sdoo3YciEMJ1AmD16" target="_maps">
              <h4>Avenida Palestina, 212
                <br/>
              Campinas - Flamboyant</h4>
            </a>
            <a href="tel:1933051905">
            <h5><i class="fas fa-phone-square-alt"></i> (19) 3305-1905</h5>
            </a>
            <p class="card-text">
              <a href="https://facebook.com/kakalimpeza" target="_new" ><i class="fab fa-facebook-square"></i> Facebook (@kakalimpeza)</a>
              <br/>
              <a href="https://instagram.com/kakalimpeza" target="_new" ><i class="fab fa-instagram-square"></i> Instagram (@kakalimpeza)</a>
              <br/>
              <a href="https://api.whatsapp.com/send?phone=551933051905" target="_new" ><i class="fab fa-whatsapp-square"></i> Whatsapp</a>
            </p>
            <!-- <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars -->
          </div>
        </div>
        <!-- /.card -->

        <div class="card mt-4" style="margin-top: 20px !important; padding-top: 0px !important; background-color: #ffffff;">
          <div class="card-body">
            <h3 class="card-title">KAKA LIMPEZA - Loja 02</h3>
            <a href="https://g.page/kakalimpeza" target="_maps">
              <h4>Av. José Bonifácio, 441
                <br/>
              Jd Alto da Barra - Campinas - SP</h4>
            </a>
            <a href="tel:1937221905">
            <h5><i class="fas fa-phone-square-alt"></i> (19) 3722-1905</h5>
            </a>
            <!-- <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars -->
          </div>
        </div>
        <!-- /.card -->

        <div class="card mt-4" style="margin-top: 20px !important; padding-top: 0px !important; background-color: #ffffff;">
          <div class="card-body">
            <h3 class="card-title">KAKA LIMPEZA - Loja 03</h3>
            <a href="https://g.page/kakalimpeza" target="_maps">
              <h4>Av. José Bonifácio, 441
                <br/>
              Jd Alto da Barra - Campinas - SP</h4>
            </a>
            <a href="tel:1932966076">
            <h5><i class="fas fa-phone-square-alt"></i> (19) 3296-6076</h5>
            </a>
            <p class="card-text">
              <a href="https://www.facebook.com/Kaka.Limpeza.JdSantana" target="_new" ><i class="fab fa-facebook-square"></i> Facebook</a>
              <br/>
              <a href="https://www.instagram.com/kaka.limpeza.jdsantana/" target="_new" ><i class="fab fa-instagram-square"></i> Instagram (@kakalimpeza04)</a>
              <br/>
              <a href="https://api.whatsapp.com/send?phone=5519995620592" target="_new" ><i class="fab fa-whatsapp-square"></i> Whatsapp</a>
            </p>
            <!-- <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars -->
          </div>
        </div>
        <!-- /.card -->

        <div class="card mt-4" style="margin-top: 20px !important; margin-bottom: 20px; padding-top: 0px !important;">
          <div class="card-body">
            <h3 class="card-title">KAKA LIMPEZA - Loja 04</h3>
            <a href="https://g.page/kakalimpeza04" target="_maps">
              <h4>R. Guerino Bristotti, 613
                <br/>Jardim Myrian Moreira da Costa, Campinas - SP</h4>
            </a>
            <a href="tel:19995620592">
            <h5><i class="fas fa-phone-square-alt"></i> (19) 99562-0592</h5>
            </a>
            <p class="card-text">
              <a href="https://facebook.com/kakalimpeza04" target="_new" ><i class="fab fa-facebook-square"></i> Facebook (@kakalimpeza04)</a>
              <br/>
              <a href="https://instagram.com/kakalimpeza04" target="_new" ><i class="fab fa-instagram-square"></i> Instagram (@kakalimpeza04)</a>
              <br/>
              <a href="https://api.whatsapp.com/send?phone=5519995620592" target="_new" ><i class="fab fa-whatsapp-square"></i> Whatsapp</a>
            </p>
            <!-- <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars -->
          </div>
        </div>

        <div class="card mt-4" style="margin-top: 20px !important; margin-bottom: 20px; padding-top: 0px !important;">
          <div class="card-body">
            <h3 class="card-title">KAKA LIMPEZA - Loja 05</h3>
            <a href="https://g.page/kakalimpeza05" target="_maps">
              <h4>Av. Dr. Alberto Sarmento, 244
                <br/>Bonfim, Campinas - SP</h4>
            </a>
            <a href="tel:1932425022">
            <h5><i class="fas fa-phone-square-alt"></i> (19) 3242-5022</h5>
            </a>
            <p class="card-text">
              <a href="https://facebook.com/kakalimpeza05" target="_new" ><i class="fab fa-facebook-square"></i> Facebook (@kakalimpeza05)</a>
              <br/>
              <a href="https://instagram.com/kakalimpeza05" target="_new" ><i class="fab fa-instagram-square"></i> Instagram (@kakalimpeza05)</a>
              <br/>
              <a href="https://api.whatsapp.com/send?phone=5519997148608" target="_new" ><i class="fab fa-whatsapp-square"></i> Whatsapp</a>
            </p>
            <!-- <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars -->
          </div>
        </div>
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