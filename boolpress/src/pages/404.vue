<template>
  <Blank class="h-screen">
    <div class="container">
      <h2><span>404</span> page not found!</h2>
      <p>La pagina che cercavi non esiste</p>
    </div>
  </Blank>
</template>

<script>
import Blank from '../layouts/Blank.vue';
  export default {
    components: {
      Blank
    }
    
  }
</script>

<style scoped>

.h-screen {
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: #333;
  color: white;
}

h2 {
  font-size: 48px;
}

</style>