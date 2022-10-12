var URL_API = "https://api.soucriador.com.br/"
var URL_BASE = "https://soucriador.com.br/"

function doLogin() {
    var form = new FormData();
    form.append("email", document.getElementById("inputEmail").value);
    form.append("password", document.getElementById("inputPassword").value);

    var settings = {
        "url": URL_BASE + "session",
        "method": "POST",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
    };

    $.ajax(settings)
        .done(function(response) {
            const boxDanger = document.querySelector('#boxLoginAlertDanger');
            const boxSuccess = document.querySelector('#boxLoginAlertSuccess');

            if (boxSuccess.classList.contains("hidden")) {
                boxDanger.classList.add("hidden");
                boxSuccess.classList.remove("hidden");
            }

            console.log(response)

            setTimeout(function() {
                window.location.href = 'https://soucriador.com.br/meuperfil/';
            }, 10000);
        })

    .fail(function(xhr, status, error) {
        const boxDanger = document.querySelector('#boxLoginAlertDanger');
        const boxSuccess = document.querySelector('#boxLoginAlertSuccess');

        if (boxDanger.classList.contains("hidden")) {
            boxDanger.classList.remove("hidden");
            boxSuccess.classList.add("hidden");
        }
    });
}

$("#buttonLogin").click(function(e) {
    e.preventDefault()
    doLogin()
})

$("#buttonCreateAccount").click(function(e) {
    e.preventDefault()
    createUser()
});

function createUser() {
    var form = new FormData();
    form.append("email", document.getElementById("inputEmail").value);
    form.append("password", document.getElementById("inputPassword").value);
    form.append("store_id", "1");
    form.append("active", "1");
    form.append("user_id_create", "1");

    var settings = {
        "url": URL_API + "public/user",
        "method": "POST",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
    };

    $.ajax(settings).done(function(response) {
        console.log(response);
        var respostaParseada = JSON.parse(response);
        if (respostaParseada.error) {
            console.log("nao consegui cadastrar o cliente")
        } else {
            console.log(respostaParseada.user)
        }
    });
}