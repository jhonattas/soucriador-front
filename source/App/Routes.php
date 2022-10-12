<?php
/** controllers */
  $router->namespace("Source\App");

  $router->group(null);
  $router->get("/", "Pages:home");

  $router->group("projetos");
  $router->get("/", "Pages:projects");

  $router->group("manutencao");
  $router->get("/", "Pages:maintenance");
  
  /* carrinho */ 
  $router->group("carrinho");
  $router->get("/", "Products:cart_details");

  // functions
  $router->group("cart");
  $router->post("/update", "Products:update_cart");
  $router->post("/remove", "Products:remove_cart");
  $router->post("/empty", "Products:clear_cart");

  /* sessão */
  $router->group("cadastro");
  $router->get("/", "Users:sign_in");

  $router->group("meuperfil");
  $router->get("/", "Users:dashboard");

  $router->group("identificacao");
  $router->get("/", "Users:sign_up");

  /* rota de produtos */
  $router->group("produtos");
  $router->get("/", "Products:index");
  $router->get("/categoria/{subcategory_id}", "Products:subcategory");

  $router->group("pagina-produtos");
  $router->get("/{page_id}", "Products:page_id");
  
  $router->group("detalhe-produto");
  $router->get("/{product_id}", "Products:details");

  /* rotas temporarias */
  $router->group("files-import");
  $router->get("/csv", "Products:open_csv");

/** ERRORS */
  $router->group("ooops");
  $router->get("/{errcode}", "Pages:error");