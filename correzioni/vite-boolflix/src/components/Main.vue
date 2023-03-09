<template>
  <main>
    <div class="container">
      <!-- {{ items }} -->
      <ul class="grid">
        
        <Card v-for="el in items" :key="el.id" :item="el" />
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
        store,
        flags: {
          it: '/it.png',
          en: '/en.png'
        }
      }
    },
    computed: {
      movies() {
        return this.store.movies
      },
      items() {
        const { tv, movies } = this.store
        // return movies.concat(tv)
        const items = [...movies,...tv]

        return items.map((item) => {

          const isMovie = item.title !== undefined

          return {
            title: isMovie ? item.title : item.name,
            originalTitle: isMovie ? item.original_title : item.original_name,
            language: item.original_language,
            vote: item.vote_average, // convertire
            flag: this.flags[item.original_language],
            overview: item.overview,
            // src poster
            isMovie: isMovie,
          }
        })
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