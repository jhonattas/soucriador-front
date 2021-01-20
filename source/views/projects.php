
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Projetos · Sou Criador</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <?php require_once('components/plugins/plugin-analytics.php'); ?>
    <?php require_once('components/viewport.php'); ?>

    <!-- Favicons -->
    <link rel="shortcut icon" href="https://blog.jhonattas.com/favicon.ico">
    <!-- 32x32 -->
    <link rel="shortcut icon" href="https://blog.jhonattas.com/favicon.png"><meta name="theme-color" content="#7952b3">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .card-img-top {
        background-repeat: no-repeat;
        background-size: cover, contain;
        background-position: center
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="https://soucriador.com/" class="navbar-brand d-flex align-items-center">
        <strong>Sou Criador</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Projetos</h1>
        <p class="lead text-muted">Coisas legais que eu fiz e / ou tive a honra de participar, informações mais detalhadas de cada projeto estão disponiveis no meu blog.</p>
        <p>
          <a href="https://blog.jhonattas.com/tags/#projects" class="btn btn-primary my-2">Projetos no Blog</a>
          <!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img 
              class="bd-placeholder-img card-img-top" 
              width="100%" 
              height="225" 
              style="
                background-image: url('<?php echo URL_BASE; ?>assets/img/mini/saveway.png');"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <div class="card-body">
              <p class="card-text"><b>Saveway</b> - Página institucional.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button 
                    type="button" 
                    class="btn btn-sm btn-outline-secondary"
                    onclick="window.location.href='https://blog.jhonattas.com/pt/projects/saveway-site/'">detalhes</button>
                  <button 
                    type="button" 
                    class="btn btn-sm btn-outline-secondary" 
                    onclick="window.location.href='https://blog.jhonattas.com/images/posts/00d62331876087.5664fdc6ecd9b.png'">visualizar</button>
                </div>
                <small class="text-muted" style="text-align: right">html5 / css / js</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img 
              class="bd-placeholder-img card-img-top" 
              width="100%" 
              height="225" 
              style="
                background-image: url('<?php echo URL_BASE; ?>assets/img/mini/amaterasu.png');"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <div class="card-body">
              <p class="card-text"><b>AMATERASU</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button 
                    type="button" 
                    class="btn btn-sm btn-outline-secondary"
                    onclick="window.location.href='https://blog.jhonattas.com/pt/projects/amaterasu/'">detalhes</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary disabled">visualizar</button>
                </div>
                <small class="text-muted" style="text-align: right">Ruby / Amazon SQS</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img 
              class="bd-placeholder-img card-img-top" 
              width="100%" 
              height="225" 
              style="
                background-image: url('<?php echo URL_BASE; ?>assets/img/mini/cardban.png');"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="card-body">
              <p class="card-text"><b>CARDBAN</b> . Site Institucional</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button 
                    type="button" 
                    class="btn btn-sm btn-outline-secondary"
                    onclick="window.location.href='https://blog.jhonattas.com/pt/projects/cardban-institucional/'">detalhes</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary disabled">visualizar</button>
                </div>
                <small class="text-muted" style="text-align: right">PHP / HTML5 / CSS3</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div 
            class="card shadow-sm" >
            <img 
              class="bd-placeholder-img card-img-top" 
              width="100%" 
              height="225" 
              style="
                background-image: url('<?php echo URL_BASE; ?>assets/img/mini/comunicacomm.png');"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="card-body">
              <p class="card-text"><b>COMUNICACOMM</b> - Landing Page</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button 
                    type="button" 
                    class="btn btn-sm btn-outline-secondary"
                    onclick="window.location.href='https://blog.jhonattas.com/pt/projects/comunicacomm/'">detalhes</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary disabled">visualizar</button>
                </div>
                <small class="text-muted" style="text-align: right">HTML5 / CSS3 / Gráfica</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img 
              class="bd-placeholder-img card-img-top" 
              width="100%" 
              height="225" 
              style="
                background-image: url('<?php echo URL_BASE; ?>assets/img/mini/daniella_ramalho.jpg');"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="card-body">
              <p class="card-text"><b>DANIELLA RAMALHO</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button 
                    type="button" 
                    class="btn btn-sm btn-outline-secondary"
                    onclick="window.location.href='https://blog.jhonattas.com/pt/projects/daniela-ramalho/'">detalhes</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary disabled">visualizar</button>
                </div>
                <small class="text-muted" style="text-align: right">CARTÃO VISITAS / CONF WEBSITE</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img 
              class="bd-placeholder-img card-img-top" 
              width="100%" 
              height="225" 
              style="
                background-image: url('<?php echo URL_BASE; ?>assets/img/mini/dce.png');"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="card-body">
              <p class="card-text"><b>DCE</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button 
                    type="button" 
                    class="btn btn-sm btn-outline-secondary"
                    onclick="window.location.href='https://blog.jhonattas.com/pt/projects/dce/'">detalhes</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary disabled">visualizar</button>
                </div>
                <small class="text-muted" style="text-align: right">Illustrator / Vetorização</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img 
              class="bd-placeholder-img card-img-top" 
              width="100%" 
              height="225" 
              style="
                background-image: url('<?php echo URL_BASE; ?>assets/img/mini/flyworld_franquia.png');"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="card-body">
              <p class="card-text"><b>FLYWORLD</b> . Franquia.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button 
                    type="button" 
                    class="btn btn-sm btn-outline-secondary"
                    onclick="window.location.href='https://blog.jhonattas.com/pt/projects/flyworld-franquia/'">detalhes</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary disabled">visualizar</button>
                </div>
                <small class="text-muted" style="text-align: right">PHP / HTML5 / CSS3 / PHOTOSHOP</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img 
              class="bd-placeholder-img card-img-top" 
              width="100%" 
              height="225" 
              style="
                background-image: url('<?php echo URL_BASE; ?>assets/img/mini/grupojrcamp.jpg');"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="card-body">
              <p class="card-text"><b>GRUPO JR CAMP</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button 
                    type="button" 
                    class="btn btn-sm btn-outline-secondary"
                    onclick="window.location.href='https://blog.jhonattas.com/pt/projects/grupojrcamp-site/'">detalhes</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary disabled">visualizar</button>
                </div>
                <small class="text-muted" style="text-align: right">PHP / HTML5 / CSS3 / PHOTOSHOP</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img 
              class="bd-placeholder-img card-img-top" 
              width="100%" 
              height="225" 
              style="
                background-image: url('<?php echo URL_BASE; ?>assets/img/mini/igor_flat.png');"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="card-body">
              <p class="card-text"><b>FLAT GUYS</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button 
                    type="button" 
                    class="btn btn-sm btn-outline-secondary"
                    onclick="window.location.href='https://blog.jhonattas.com/pt/projects/flat-guys/'">detalhes</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary disabled">visualizar</button>
                </div>
                <small class="text-muted" style="text-align: right">Illustrator</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
      
  </body>
</html>
