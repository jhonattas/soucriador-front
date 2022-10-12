<div class="bg-dark border-right menu-right" id="sidebar-wrapper">
  <a 
    class="categoryName"
    href="<?php echo URL_BASE . "produtos";?>">
    <div class="sidebar-heading">
      TODOS PRODUTOS
    </div>
  </a>
  
  <div class="list-group list-group-flush" id="accordion">
    <?php foreach ($categories as $category):?>
      <div class="categoryBox">
        <a
          class="list-group-item list-group-item-action categoryName"
          data-toggle="collapse"
          data-target="#category<?php echo $category->id; ?>"
          aria-expanded="false"
          aria-controls="collapseOne"
          data-parent="#accordion">
          <b>
            <?php echo $category->title; ?>
          </b>
        </a>
        
        <div 
          id="category<?php echo $category->id; ?>"
          class="collapse"
          aria-labelledby="headingOne" 
          data-parent="#accordion">
          <?php foreach ($category->subcategories as $subcategory):?>
            <a href="<?php echo URL_BASE . 'produtos/categoria/' . $subcategory->id; ?>"
              class="list-group-item subcategory">
              <?php echo $subcategory->title; ?>
            </a>
          <?php endforeach;?>
        </div>
      </div>
    <?php endforeach;?>
  </div>

  <div 
    class="sidebar-footer" 
    style="max-width: 240px; padding: 0.3em 0 0.2em; margin: 0 auto; background-color: #FFFFFF;">
    <div class="card anuncie">
      <a
        href="https://fb.com/soucriador/"
        target="_facebook">
        <img class="card-img-top" src="<?php echo URL_BASE; ?>assets/img/facebook.png" alt="Visite nosso facebook">
      </a>
    </div>

    <div class="card" style="margin-top: 5px; margin-bottom: 2px;">
      <div 
        class="fb-page" 
        data-href="https://www.facebook.com/soucriador/" 
        data-tabs="timeline" 
        data-width="" 
        data-height="130" 
        data-small-header="false" 
        data-adapt-container-width="true" 
        data-hide-cover="false" 
        data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/soucriador/" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/soucriador/">Kaka Limpeza</a>
          </blockquote>
      </div>  
    </div><!-- card -->
  </div><!-- sidebar-footer -->
</div>
<!-- /#sidebar-wrapper -->