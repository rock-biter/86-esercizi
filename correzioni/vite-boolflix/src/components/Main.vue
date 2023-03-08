<template>
  <main>
    <div class="container">
      <ul class="grid">
        <Card v-for="movie in movies" :key="movie.id" :item="movie" />
      </ul>
    </div>
  </main>
</template>

<script>
  import store from '../store'
  import Card from './Card.vue'

  export default {
    components: {
      Card
    },
    data() {
      return {
        store
      }
    },
    computed: {
      movies() {
        return this.store.movies
      }
    } 
  }
</script>

<style lang="scss" scoped>

.grid {
  display: grid;
  grid-template-columns: repeat(4,1fr);
  gap: 40px;
}

</style>