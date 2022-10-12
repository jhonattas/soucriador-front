$('#profile-button').click(function(e) {
      e.preventDefault();
      location.href = "<?php echo URL_BASE; ?>meuperfil";
    });

    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      // não vai mostrar o menu no inicio
      $("#wrapper").toggleClass("toggled");
    });

    $("#buttonHomepage").click(function(e) {
      e.preventDefault();
      location.href = "<?php echo URL_BASE; ?>";
    });

    $("#buttonSignIn").click(function(e) {
      e.preventDefault();
      location.href = '<?php echo URL_BASE; ?>cadastro';
    });

    /** open cart */
    $("#items-button").click(function(e) {
      e.preventDefault();
      location.href = '<?php echo URL_BASE; ?>carrinho';
    });

    $('#buttonCreateProduct').click(function(e) {
      e.preventDefault();
      location.href = '<?php echo URL_BASE; ?>identificacao';
    });