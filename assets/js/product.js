var URL_API = "https://api.soucriador.com/"

function saveProduct(store_id, barcode, title, description, price){
  
  // prepara os dados para subir ate a API
  var form = new FormData()
  form.append("store_id", store_id)
  form.append("barcode", barcode)
  form.append("title", title)
  form.append("description", title)
  form.append("price", price)
  form.append("volume", "1")
  form.append("featured", 0)
  form.append("obs", "")
  form.append("status", 1)

  var settings = {
    "url": URL_API + "product",
    "method": "POST",
    "timeout": 0,
    "processData": false,
    "mimeType": "multipart/form-data",
    "contentType": false,
    "data": form
  };

  
  $.post(settings)
    .done(function (response) {
      var respostaParseada = JSON.parse(response);
      console.log(respostaParseada)
    })
    .fail(function(xhr, status, error){
      console.log(error)
    })
}

function insereCarrinho(){
  JSON.parse(response)
}

function loadJSON(){
  var settings = {
    "url": "https://soucriador.com/files-import/csv",
    "method": "GET",
    "timeout": 0
  }

  $.ajax(settings).done(function (response) {
    console.log(response)
    //response.products.forEach(function(produto, chave){
    //  console.log(chave, produto);
    //  saveProduct(produto.store_id, produto.barcode, produto.title, produto.description, produto.price)
    //})
    //saveProduct("1", "1", "titulo do produto", "descricao", "5,7", "1 unidade")
    return response
  })
}