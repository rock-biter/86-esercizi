<script>
// importiamo il componente
import AppTitle from './components/AppTitle.vue'

export default {
  components: {
    AppTitle
  },
  data() {
    return {
      message: 'Ciao mondo come stai'
    }
  }
}

</script>

<template>

  <AppTitle />
  <div>
    <img src="/vite.svg" width="100" alt="">
    <img src="./assets/vue.svg" width="100" alt="">
  </div>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ducimus fuga beatae asperiores non unde dicta quae amet laboriosam! Esse.
  </p>

</template>

<style>

</style>
