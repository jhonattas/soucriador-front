<?php ?>
<meta property="og:title" content="<?php echo $product->title; ?>">
<meta property="og:site_name" content="soucriador">
<meta property="og:description" content="<?php echo html_entity_decode($product->obs); ?>">
<meta property="og:type" content="product">
<meta property="og:url" content="<?php echo URL_BASE . 'produto/' . $product->id; ?>">
<meta property="fb:app_id" content="940338582810072">
<?php if(!empty($product->product_images[0]->url)) { ?>
  <meta property="og:image" content="<?php echo $api_images . $product->product_images[0]->url; ?>">
<?php } ?>