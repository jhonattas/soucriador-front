var URL_BASE = "https://soucriador.com/";
function addProductToCart(
    productID,
    storeID,
    productTitle,
    productPrice,
    itensCount,
    totalAmount
) {

    // prepara os dados para subir ate a API
    var form = new FormData();
    form.append("productId", productID);
    form.append("productTitle", productTitle);
    form.append("productPrice", productPrice);
    form.append("totalAmount", totalAmount);
    form.append("itensCount", itensCount);
    form.append("storeID", storeID);

    var settings = {
        "url": URL_BASE + "cart/update",
        "method": "POST",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
    };

    $.ajax(settings)
        .done(function(response) {
            var respostaParseada = JSON.parse(response);
            console.log('total ' + respostaParseada.total);

            var formatado = parseFloat(respostaParseada.totalPrice).toFixed(2);
            console.log('total price ' + formatado);

            $('#cart-qtd').text(respostaParseada.total);
            $('#cart-amount').text(
                parseFloat(respostaParseada.totalPrice).toFixed(2)
            );

        })
        .fail(function(xhr, status, error) {
            console.log(error);
        });
}

$('.produto').on('click', function() {
    addProductToCart(
        $(this).attr('id'), // id
        $(this).attr('data-store-id'), // id-loja
        $(this).attr('data-produto'), // titulo
        parseFloat($(this).attr('data-preco')) // preco do produto
    );
});

function removeProductFromCart(
    productID
) {

    if ($('#cart-qtd').text() == '1') {
        var row = document.getElementById("product0");
        row.parentElement.removeChild(row);
        limpaCarrinho()
    } else {
        var form = new FormData();
        form.append("productId", productID);

        var settings = {
            "url": URL_BASE + "cart/remove",
            "method": "POST",
            "timeout": 0,
            "processData": false,
            "mimeType": "multipart/form-data",
            "contentType": false,
            "data": form
        };

        $.ajax(settings)
            .done(function(response) {
                var respostaParseada = JSON.parse(response);
                $('#cart-qtd').text(respostaParseada.total);
                $('#cart-amount').text(respostaParseada.totalPrice);

                // remove da tabela
                var row = document.getElementById("product" + productID);
                row.parentElement.removeChild(row);
            })
            .fail(function(xhr, status, error) {
                console.log(error);
            });
    }
}

function limpaCarrinho() {
    var form = new FormData();
    form.append("", "");

    var settings = {
        "url": URL_BASE + "cart/empty",
        "method": "POST",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
    };

    $.ajax(settings).done(function(response) {
        $('#cart-qtd').text("0");
        $('#cart-amount').text("0.00");
    });
}