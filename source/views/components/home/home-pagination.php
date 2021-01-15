<?php ?>
<nav aria-label="Page navigation example" style="margin: 0 auto;">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" 
      href="<?php echo URL_BASE . 'produtos/'; ?>"
      tabindex="-1"
      >Inicio</a>
    </li>
    <?php if($pagination->first > 0){ ?>
      <li class="page-item">
        <a 
          class="page-link"
          href="<?php echo URL_BASE . 'pagina-produtos/'. ($pagination->first); ?>"
          style="color: #EB0F7B;"><?php echo $pagination->first; ?></a>
      </li>
    <?php } ?>

    <li class="page-item">
      <a 
        class="page-link"
        href="<?php echo URL_BASE . 'pagina-produtos/'. ($pagination->first + 1); ?>"
        style="color: #EB0F7B;"><?php echo $pagination->first + 1; ?></a>
    </li>

    <li class="page-item">
      <a 
        class="page-link"
        href="<?php echo URL_BASE . 'pagina-produtos/'. ($pagination->first + 2); ?>"
        style="color: #EB0F7B;"><?php echo $pagination->first + 2; ?></a>
    </li>

    <li class="page-item">
      <a 
        class="page-link"
        href="<?php echo URL_BASE . 'pagina-produtos/'. ($pagination->first + 3); ?>"
        style="color: #EB0F7B;"><?php echo $pagination->first + 3; ?></a>
    </li>

    <li class="page-item">
      <a 
        class="page-link" 
        href="<?php echo URL_BASE . 'pagina-produtos/'. ($pagination->last + 4); ?>"
        style="color: #EB0F7B;"><?php echo $pagination->first + 4; ?></a></li>
      </a>
    </li>
    <li class="page-item">
      <a 
        class="page-link" 
        href="<?php echo URL_BASE . 'pagina-produtos/'. ($pagination->last + 5); ?>">Próximo</a>
    </li>
  </ul>
</nav>