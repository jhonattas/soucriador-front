<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title><?php echo mainTitle; ?> - Identificação</title>
<link rel="stylesheet" href="<?php echo URL_BASE; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>

<?php require_once('components/favicon.php'); ?>
<?php require_once('components/plugins/plugin-analytics.php'); ?>
<?php require_once('components/viewport.php'); ?>

<style>
  body {
    background-image: url('<?php echo URL_BASE; ?>assets/img/fundo.png');
    background-position: center;
    background-size: all;
    background-color: #cccccc;
  }

  .loginAlert {
    margin:  20px auto;
    visibility: visible;
    opacity: 1;
    transition: visibility 0s, opacity 0.5s linear;
  }

  .hidden {
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s, opacity 0.5s linear;
    display:  none;
  }
</style>
</head>
<body>

  <div class="container h-100" style="margin: 10px auto;">
    <div class="row h-100 justify-content-center align-items-center">
      <a href="<?php echo URL_BASE; ?>">
        <img src="<?php echo URL_BASE; ?>assets/img/logo-horizontal.png" style="max-width: 200px;">
      </a>
    </div>

    <div 
      class="row card h-100 justify-content-center align-items-center" 
      style="
        width: 28rem; 
        margin: 10px auto 0; 
        text-align: center;">
      <div class="card-body">
        <center><h5 class="card-title">Me conte mais sobre você</h5></center>
        <h6 
          class="card-subtitle mb-2 text-muted" 
          style="font-size: 1em;">
          Olá!, tudo bem contigo? Para deixar você prosseguir, eu preciso de um pouco mais de informções sobre você, tanto para sua segurança quanto para a minha.
        </h6>

        <hr/>

        <form>
          <div class="form-group" style="text-align: left;">
            <label for="inputEmail">Email</label>
            <input 
              type="email" 
              class="form-control" 
              id="inputEmail" 
              aria-describedby="emailHelp" 
              placeholder="email@kakalimpeza.com.br">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          
          <div class="form-group" style="text-align: left;">
            <label 
              for="inputPassword">Senha</label>
            <input 
              type="password" 
              class="form-control" 
              id="inputPassword" 
              placeholder="senha">
          </div>
          <div 
            class="form-check" 
            style="text-align: left;">
            <input 
              type="checkbox" 
              class="form-check-input" 
              id="exampleCheck1">
            <label 
              class="form-check-label" 
              for="exampleCheck1">manter-me conectado</label>
          </div>
          <button 
            style="
              margin-top: 15px; 
              width: 98px;"
            class="btn btn-primary"
            id="buttonLogin">entrada</button>

            <div class="alert alert-danger loginAlert hidden" role="alert" id="boxLoginAlertDanger">
              combinação de usuário e senha não encontrada
            </div>

            <div class="alert alert-success loginAlert hidden" role="alert" id="boxLoginAlertSuccess">
              entrada feita com sucesso... direcionando.
            </div>
        </form>
      </div>
    </div>

    <div 
      class="row card h-100 justify-content-center align-items-center" 
      style="width: 28rem; margin: 20px auto 0;">
      <button 
            type="submit" 
            style="
              margin-top: 15px; 
              width: 98px;
              background-color: #EB0F7B;
              border: #EB0F7B 1px solid;"
            class="btn btn-primary"
            id="buttonSignIn">cadastrar</button>
      <div 
        class="card-body" 
        style="
          font-size: 0.9em; 
          text-align: center; 
          color: #666666;">
          Se ainda assim precisar de mais ajuda, você pode nos encontrar nestes outros lugares.
        </h6>
        <div style="text-align: center; margin: 15px;">
          <a 
            href="https://api.whatsapp.com/send?phone=551933051905" 
            target="_new"
            class="card-link"><img src="<?php echo URL_BASE; ?>assets/img/agradecimento-whatsapp.png"></a>
          <a 
            href="https://facebook.com/kakalimpeza" 
            target="_new" 
            class="card-link"><img src="<?php echo URL_BASE; ?>assets/img/agradecimento-facebook.png"></a>
          <a 
            href="https://instagram.com/kakalimpeza" 
            target="_new"
            class="card-link"><img src="<?php echo URL_BASE; ?>assets/img/agradecimento-instagram.png"></a>
        </div>
      </div>
    </div>
  </div>
  <?php require_once('components/jquery.php'); ?>
  <script src="<?php echo URL_BASE; ?>assets/js/cart.js"></script>
  <script>
    <?php require_once('components/buttons-js.php'); ?>
  </script>
</body>
</html>