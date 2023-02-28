<script>
// 1. importare il componente
import DescriptionHome from './components/DescriptionHome.vue'

export default {
  components: {
    // 2. registrare il componente che abbiamo importato
    DescriptionHome
  },
  data() {
    return {
      message: 'Ciao mondo sono io!'
    }
  },
  methods: {
    sayHello() {
      console.log('Ciao!')
    }
  }
}
</script>

<template>
  <div>
    <a href="https://vitejs.dev" target="_blank">
      <img src="/vite.svg" class="logo" alt="Vite logo" />
    </a>
    <a href="https://vuejs.org/" target="_blank">
      <img src="./assets/vue.svg" class="logo vue" alt="Vue logo" />
    </a>
  </div>
  <div>
    <h1>{{ message }}</h1>
    <button @click="sayHello">Saluta</button>
  </div>

  <!-- 3. utilizzo il componente -->
  <DescriptionHome></DescriptionHome>


</template>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
