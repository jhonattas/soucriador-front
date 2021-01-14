<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/criador_colorido.png" style="margin-bottom: 2em;">
    <HomeCards msg="Welcome to Your Vue.js App"/>
  </div>
</template>

<script>
// @ is an alias to /src
import HomeCards from '@/components/HomeCards.vue'

export default {
  name: 'Home',
  components: {
    HomeCards
  }
}
</script>
