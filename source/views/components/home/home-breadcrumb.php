<?php ?>
<nav 
  aria-label="breadcrumb"
  class="homeBreadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Produtos</li>
    
    <?php if(!is_null($category_solo->title)){ ?>
      <li class="breadcrumb-item"><a href="#" style="color: #EB0F7B;"><?php echo $category_solo->title; ?></a></li>
    <?php } ?>
              
    <?php if(!is_null($subcategory_solo->title)){ ?>
      <li class="breadcrumb-item active" aria-current="page"><?php echo $subcategory_solo->title; ?></li>
    <?php } ?>
  </ol>
</nav>