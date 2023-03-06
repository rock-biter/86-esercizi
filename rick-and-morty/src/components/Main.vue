<template>
  <main class="main">
    <div class="container">
      <Filters @onSearch="fetchCharacters" @onStatusChange="fetchCharacters" />
    </div>
    <div class="container">
      <div>
        {{ store.search }}
      </div>
      <div>
        {{  store.selectedStatus }}
      </div>
    </div> 
    <div class="container">
      <ul v-if="store.characters.length > 0" class="characters">

        <!-- <li class="character card" v-for="character in characters" :key="character.id">
          <img :src="character.image" alt="">
          <h3 class="characater__name">{{ character.name }}</h3>
        </li> -->
        <Character v-for="element in store.characters" :key="element.id" :character="element" />

      </ul>
      <div v-else>
        Nessun risultato
      </div>
    </div>
  </main>
</template>

<script>
  import axios from 'axios'

  import store from '../store'

  import Character from './Character.vue'
  import Filters from './Filters.vue'

  export default {
    components: {
      Character,
      Filters,
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
        const search = this.store.search
        const status = this.store.selectedStatus
        console.log('store.search = ',search)
        console.log('store.status = ',status)

        axios
          // .get(`https://rickandmortyapi.com/api/character?name=${search}&status=alive&gender=male`)
          .get('https://rickandmortyapi.com/api/character',{
            params: {
              name: search,
              status: status,
              // gender: 'male'
            }
          })
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
          }).catch((error) => {
            console.log(error)
            this.store.characters = []
            this.store.count = 0
            this.store.pages = 0
          })
      },
      // onSearchFn() {
      //   console.log('on search event')
      //   this.fetchCharacters()
      // }
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