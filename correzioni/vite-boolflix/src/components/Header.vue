<template>
  <header>

    <div class="container">
      <div>
        BOOLFLIX
      </div>

      <div>
        <!-- <input type="text" placeholder="Carca per nome" @keyup.enter="$emit('onSearch')" v-model="store.search">
        <button @click="$emit('onSearch')">Cerca</button> -->
        <input type="text" placeholder="Carca per nome" @keyup.enter="setSearch" v-model="localSearch">
        <button @click="setSearch">Cerca</button>
      </div>
    </div>

  </header>
</template>

<script>
  import store from '../store'

  export default {
    data() {
      return  {
        store,
        localSearch: ''
      }
    },
    methods: {
      setSearch() {
        this.store.search = this.localSearch
      }
    }
  }
</script>

<style lang="scss" scoped>

.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

</style>