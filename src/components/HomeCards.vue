<template>
  <div class="container hello">
    <div class="row align-items-center">
      <div class="col w3-container w3-center w3-animate-bottom-1 animation-custom-params">
        <div class="card" style="">
          <img src="https://soucriador.com/media/images/portfolio/phone_tricks.png" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col w3-container w3-center w3-animate-bottom-2 animation-custom-params">
        <div class="card" style="">
          <img src="https://soucriador.com/media/images/portfolio/patrocine.png" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col w3-container w3-center w3-animate-bottom-3">
        <div class="card" style="">
          <img src="https://soucriador.com/media/images/portfolio/restaurant.png" class="card-img-top" alt="...">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
body{
  animation-delay: 2.1s, 480ms;
}

h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
animation-custom-params{
  animation: 1s fadeIn;
  animation-fill-mode: forwards;
  
  visibility: hidden;
}

  @keyframes fadeIn {
    99% {
      visibility: hidden;
    }
    100% {
      visibility: visible;
    }
  }
</style>
