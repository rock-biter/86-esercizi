<template>
  <NavBar/>
  <main>
    <slot />
  </main>
  <footer>
    <div class="container">
      footer default layout
    </div>
  </footer>
</template>

<script>
  import NavBar from '../components/NavBar.vue';
  export default {
    components: {
      NavBar
    }
    
  }
</script>

<style lang="scss" scoped>

</style>