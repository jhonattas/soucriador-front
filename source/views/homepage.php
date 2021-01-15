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

<!-- Icons -->
<!-- 16x16 -->
<link rel="shortcut icon" href="https://blog.jhonattas.com//favicon.ico">
<!-- 32x32 -->
<link rel="shortcut icon" href="https://blog.jhonattas.com//favicon.png">
<!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
<link rel="apple-touch-icon-precomposed" href="https://blog.jhonattas.com//images/apple-touch-icon-precomposed.png">
<!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://blog.jhonattas.com//images/apple-touch-icon-72x72-precomposed.png">
<!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://blog.jhonattas.com//images/apple-touch-icon-114x114-precomposed.png">
<!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://blog.jhonattas.com//images/apple-touch-icon-144x144-precomposed.png">


  <style type="text/css">
    @import url('<?php echo URL_BASE; ?>assets/css/w3.css');
    @import url('<?php echo URL_BASE; ?>assets/css/svg-animation.css');

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
        <p class="lead text-muted">De qual das minhas cores deseja saber mais?.</p>
        <p>
          <div class="container">
            <div class="row align-items-center">
              <!-- jhonattas.com -->
              <div class="col w3-container w3-center w3-animate-bottom-1 animation-custom-params home-button">
                <a href="https://jhonattas.com">
                  <div class="card" style="">
                    <img src="<?php echo URL_BASE; ?>/assets/images/home_buttons/jhonattasdotcom.png" class="card-img-top" alt="...">
                    jhonattas.com
                  </div>
                </a>
              </div>
              

              <div class="col w3-container w3-center w3-animate-bottom-2 animation-custom-params home-button">
                <div class="card" style="">
                  <img src="https://soucriador.com/media/images/portfolio/patrocine.png" class="card-img-top" alt="...">
                  project: cynema
                </div>
              </div>
              <div class="col w3-container w3-center w3-animate-bottom-3 home-button">
                <div class="card" style="">
                  <img src="https://soucriador.com/media/images/portfolio/restaurant.png" class="card-img-top" alt="...">
                  project: dane-se a dieta
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
    <script src="<?php echo URL_BASE; ?>classie.js"></script>
    <script src="<?php echo URL_BASE; ?>svg.js"></script>

      
  </body>
</html>
