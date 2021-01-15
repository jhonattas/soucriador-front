<nav 
  class="navbar navbar-expand-md navbar-dark fixed-top bg-dark topNavigation">
  
  <!-- segunda nav -->
  <div class="navbar-collapse w-100 dual-collapse2 order-1 order-md-0">
      <ul class="navbar-nav mt-2 mt-lg-0">
        <li class="nav-item dropdown">
          <a 
            class="nav-link dropdown-toggle" 
            href="#" id="navbarDropdown" 
            style="color: #FFFFFF;"
            role="button" 
            data-toggle="dropdown" 
            aria-haspopup="true" 
            aria-expanded="false">
            <i class="fas fa-bars"></i> Navegação
          </a>
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo URL_BASE;?>produtos">Produtos</a>
            <a class="dropdown-item" href="<?php echo URL_BASE;?>promocoes">Promoções</a>
            <a class="dropdown-item" href="<?php echo URL_BASE;?>lojas">Lojas</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://admin.soucriador.com/" target="_new">Área Restrita</a>
          </div>
        </li>
      </ul>
  </div><!-- segunda nav -->

  <!-- centro -->
  <div class="mx-auto order-0">
    <a class="mx-auto my-2 order-0 order-md-1 position-relative" href="<?php echo URL_BASE; ?>">
      <img 
        class="navigationLogo"
        src="<?php echo URL_BASE; ?>assets/img/logo-horizontal.png" >
    </a>
  </div>

  <div class="navbar-collapse w-100 dual-collapse2" id="navbarCollapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <button 
          class="btn btn-primary cashButton"
          id="menu-toggle">
          R$ <span id="cart-amount"><?php echo $_SESSION['cart-total']; ?></span> <i class="fas fa-shopping-cart"></i>
        </button>

        <button 
          class="btn btn-light" 
          id="items-button">
            Itens <span class="badge badge-warning" id="cart-qtd"><?php echo $_SESSION['cart-count']; ?></span>
        </button>

        <button 
          class="btn btn-warning" 
          id="profile-button">
            <i class="fas fa-user"></i>
        </button>

      </li>
    </ul>
  </div><!-- fim primeira nav -->

</nav>