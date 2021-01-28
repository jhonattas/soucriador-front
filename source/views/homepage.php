<?php ?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Sou Criador</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <?php require_once('components/favicon.php'); ?>
    <?php require_once('components/plugins/plugin-analytics.php'); ?>
    <?php require_once('components/viewport.php'); ?>

    <link rel="stylesheet" type="text/css" href="https://api.soucriador.com/static/w3.css">
    <link rel="stylesheet" type="text/css" href="https://api.soucriador.com/static/svg-animation.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>assets/css/plugin-whatsapp.css" />

  <style type="text/css">

    a {
      text-decoration: none;
    }

    .home-button, .home-button:hover {
      -webkit-transition: opacity 1s ease-in-out;
      -moz-transition: opacity 1s ease-in-out;
      -ms-transition: opacity 1s ease-in-out;
      -o-transition: opacity 1s ease-in-out;
      transition: opacity 1s ease-in-out;
    }
      
    .home-button:hover {
        zoom: 1;
        filter: alpha(opacity=50);
        opacity: 0.7;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    <?php require_once('components/plugins/plugin-whatsapp.php'); ?>
    
<main>

  <div class="entry-header">
    <div class="entry-image-index" style="max-width: 330px !important;">
      <svg 
        version="1.1" 
        xmlns="http://www.w3.org/2000/svg" 
        xmlns:xlink="http://www.w3.org/1999/xlink" 
        x="0px" 
        y="0px" 
        id="logo" 
        class="line-drawing"
        width="330px" 
        height="330px" 
        viewBox="315.5 295.5 330 330" 
        enable-background="new 315.5 295.5 330 330" 
        xml:space="preserve" 
        style="">
        <path class="darker"  
          d="M635.984,611.215H430.94l101.832-255.776L635.984,611.215z
          M597.543,611.215H349.455l123.209-301.674L597.543,611.215z M473.122,611.215H325.949l73.091-183.936L473.122,611.215z
          M597.543,611.215H430.94l81.472-204.638L597.543,611.215z"></path>
      </svg>
      
      <div data-svg="logo" class="logo hide">
        <img src="https://blog.jhonattas.com/images/criador_colorido.png"/>
      </div>
              
    </div><!-- /.entry-image-index -->
  </div>

  <section class="py-5 text-center" style="width: 100%; padding-top: 0 !important;">
    <div class="row py-lg-5" style="width: 100%; padding-top: 0 !important;">
      <div class="mx-auto">
        <p class="lead text-muted">De qual das minhas cores deseja saber mais?</p>
        <p>
          <div class="container">
            <div class="row align-items-center">
              <!-- jhonattas.com -->
              <div class="col w3-container w3-center w3-animate-bottom-1 animation-custom-params home-button">
                <a href="https://jhonattas.com">
                  <div class="card" style="border: none;">
                    <img src="<?php echo URL_BASE; ?>assets/img/home_buttons/jhonattasdotcom.png" class="card-img-top" alt="...">
                    jhonattas.com
                  </div>
                </a>
              </div>
              

              <div class="col w3-container w3-center w3-animate-bottom-2 animation-custom-params home-button">
                <a href="<?php echo URL_BASE; ?>projetos/">
                  <div class="card"  style="border: none;">
                    <img src="<?php echo URL_BASE; ?>assets/img/home_buttons/projects.png" class="card-img-top" alt="...">
                    projetos
                  </div>
                </a>
              </div>
              <div class="col w3-container w3-center w3-animate-bottom-3 home-button">
                <div class="card"  style="border: none;">
                  <img src="<?php echo URL_BASE; ?>assets/img/home_buttons/services.png" class="card-img-top" alt="...">
                  serviços
                </div>
              </div>
    </div>
  </div>
          </div>
        </p>
      </div>
    </div>
  </section>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Voltar ao Topo</a>
    </p>
    <p class="mb-1">Sou Criador &copy; Jhonattas Henrique - Todos os direitos reservados</p>
  </div>
</footer>


    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="<?php echo URL_BASE; ?>assets/js/classie.js"></script>
    <script src="<?php echo URL_BASE; ?>assets/js/svg.js"></script>

      
  </body>
</html>
