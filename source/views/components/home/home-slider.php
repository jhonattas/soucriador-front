<?php ?>
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div 
        class="carousel-item active" 
        style="
          background-image: url('<?php echo URL_BASE; ?>assets/img/temp/girl-mask.png');
          background-size:cover;">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4 sliderTitle">PROTEÇÃO</h2>
          <p class="lead sliderSubTitle">Consulte nossa seção de proteção, contendo máscaras de proteção, álcool entre outros itens.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" 
        style="
          background-image: url('<?php echo URL_BASE; ?>assets/img/temp/promomop01.jpg');
          background-size:cover;">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4 sliderTitle">Utilitários</h2>
          <p class="lead sliderSubTitle">Diversas praticidades para você limpar seu lar ou sua empresa.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" 
        style="
          background-image: url('<?php echo URL_BASE; ?>assets/img/temp/termometro.jpg');
          background-size:cover;">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4 sliderTitle">Termometro Digital</h2>
          <!-- <p class="lead">.</p> -->
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>