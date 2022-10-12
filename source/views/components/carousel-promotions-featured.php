<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <?php foreach (array_slice($products, 0, 4) as $product):?>
      <div class="col-md-3" style="float:left">
       <div class="card h-100 mb-2">
          <a href="<?php echo URL_BASE . 'produto/' . $product->id; ?>">
            <!-- caso nao possua uma imagem cadastrada, impede que o produto quebre -->
            <?php 
              if(!empty($product->product_images[0]->url)){ ?>
              <div
                class="card-img-top cardProduct"
                style="background-image: url('<?php echo API_IMAGES . $product->product_images[0]->url; ?>');">
              </div>
            <?php } else { ?>
              <div
                class="card-img-top cardProduct"
                style="background-image: url('assets/img/no-image.png)'">
              </div>
              <?php } ?>
          </a>
          <div class="card-body">
            <span class="card-title">
              <b><?php echo $product->title; ?></b>
            </span><br/>
            <?php if($product->price != "0") { ?>
              R$ <?php echo $product->price; ?>
            <?php } else { ?>
              Preço Indisponivel
            <?php } ?>
          </div>
          <div class="card-footer text-muted">
            <a
              href="<?php echo URL_BASE . 'produto/' . $product->id; ?>"
              class="btn btn-primary details"
              style="width: 100%;">
            detalhes
            </a>
          </div>
        </div>
      </div>
      <?php endforeach;?>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">
      <?php foreach (array_slice($products, 4, 8) as $product):?>
      <div class="col-md-3" style="float:left">
       <div class="card h-100 mb-2">
          <a href="<?php echo URL_BASE . 'produto/' . $product->id; ?>">
            <!-- caso nao possua uma imagem cadastrada, impede que o produto quebre -->
            <?php 
              if(!empty($product->product_images[0]->url)){ ?>
              <div
                class="card-img-top cardProduct"
                style="background-image: url('<?php echo API_IMAGES . $product->product_images[0]->url; ?>');">
              </div>
            <?php } else { ?>
              <div
                class="card-img-top cardProduct"
                style="background-image: url('assets/img/no-image.png');">
              </div>
              <?php } ?>
          </a>
          <div class="card-body">
            <span class="card-title">
              <b><?php echo $product->title; ?></b>
            </span><br/>
            <?php if($product->price != "0") { ?>
              R$ <?php echo $product->price; ?>
            <?php } else { ?>
              Preço Indisponivel
            <?php } ?>
          </div>
          <div class="card-footer text-muted">
            <a
              href="<?php echo URL_BASE . 'produto/' . $product->id; ?>"
              class="btn btn-primary details"
              style="width: 100%;">
            detalhes
            </a>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
    <!--/.Second slide-->

   

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->