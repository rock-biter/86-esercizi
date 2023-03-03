<template>
  <main class="main">
    <div class="container">
      <ul class="characters">

        <!-- <li class="character card" v-for="character in characters" :key="character.id">
          <img :src="character.image" alt="">
          <h3 class="characater__name">{{ character.name }}</h3>
        </li> -->
        <Character v-for="element in store.characters" :key="element.id" :character="element" />

      </ul>
    </div>
  </main>
</template>

<script>
  import axios from 'axios'

  import store from '../store'

  import Character from './Character.vue'

  export default {
    components: {
      Character
    },
    data() {
      return {
        // characters: [],
        info: {},
        store,
        // store: store
      }
    },
    computed: {
      characters() {
        return this.store.characters
      }
    },
    methods: {
      fetchCharacters() {
        console.log('fetching data')
        // fare la chiamata in get all'endpoint: 
        axios
          .get('https://rickandmortyapi.com/api/character')
          .then((res) => {
            console.log(res)
            console.log(res.data)
            console.log(res.data.info)
            this.store.characters = res.data.results
            // this.info = res.data.info
            const { count, pages } = res.data.info
            this.store.count = count
            this.store.pages = pages

            console.log(this.store)
          })
      }
    },
    created() {
      console.log('store',this.store)
      this.fetchCharacters()
    },
  }
</script>

<style lang="scss" scoped>
.main {
  padding: 100px 0;
}

.characters {
  display: grid;
  gap: 40px;
  grid-template-columns: repeat(4,1fr);
}
</style>