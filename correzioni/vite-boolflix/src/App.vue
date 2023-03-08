<template>
  <div>
    <!-- <Header @onSearch="fetchData" /> -->
    <Header />
    <Main />
  </div>
</template>

<script>
  import Header from './components/Header.vue';
  import Main from './components/Main.vue';

  import store from './store'
  import axios from 'axios'

  export default {
    components: {
      Main, 
      Header
    },
    data() {
      return {
        store: store
      }
    },
    computed: {
      API_KEY() {
        return this.store.config.API_KEY
      },
      BASE_URI() {
        return this.store.config.BASE_URI
      },
      search() {
        return this.store.search
      },
      moviesEndpoint() {
        return this.BASE_URI + '/search/movie'
      }
    },
    watch: {
      search(newVal,oldVal) {
        // console.log(newVal,oldVal)
        this.fetchData()
      }
    },
    methods: {
      fetchData() {
        console.log('fetch data')

        this.fetchMovies()
        // this.fetchTVs()
      },
      fetchMovies() {

        axios.get(this.moviesEndpoint,{
          params: {
            api_key: this.API_KEY,
            query: this.search,
            language: 'it-IT'
          }
        }).then(res => {
          console.log(res)
          const { results } = res.data
          // const results = res.data.results
          this.store.movies = results
          console.log(this.store.movies)
        }).catch(() => {
          this.store.movies = []
        })
      }

    }
    
  }
</script>

<style lang="scss" >

</style>