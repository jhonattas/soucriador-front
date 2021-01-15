<?php foreach ($products as $product):?>
<div class="col-lg-3 col-md-6 mb-3">
  <div class="card h-100">
    <a href="<?php echo URL_BASE . 'detalhe-produto/' . $product->id; ?>">
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
          style="background-image: url('<?php echo URL_BASE; ?>assets/img/no-image.png')">
        </div>
        <?php } ?>
    </a>
    <div class="card-body">
      <span class="card-title">
        <b><?php echo $product->title; ?></b>
      </span><br/>
      <!-- <?php if($product->price != "0") { ?>
        R$ <?php echo $product->price; ?>
      <?php } else { ?>
        Preço Indisponivel
      <?php } ?> -->
      Preço sob consulta
    </div>
    <!-- <div class="card-footer text-muted">
      <a
        class="btn btn-primary details produto"
        style="width: 100%;"
        id="<?php echo $product->id; ?>" 
        data-placement="bottom" 
        data-preco="<?php echo $product->price; ?>" 
        data-produto="<?php echo $product->title; ?>"
        data-store-id="<?php echo $product->store_id; ?>"
        <?php 
        if(!empty($product->product_images[0]->url)){ ?>
        data-thumb="<?php echo API_IMAGES . $product->product_images[0]->url; ?>"
        <?php } else { ?>
        data-thumb="<?php echo URL_BASE; ?>assets/img/no-image.png"
        <?php } ?>
      >
      COMPRAR
      </a> -->
    </div>
  </div>
</div>
<?php endforeach;?>