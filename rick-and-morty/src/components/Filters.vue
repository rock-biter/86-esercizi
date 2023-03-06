<template>
  <div class="container">
    <div>
      <input @keyup.enter="$emit('onSearch')" class="search" type="text" v-model="store.search" placeholder="Filtra per nome">
    </div>
    <div>
      <select @change="$emit('onStatusChange')" v-model="store.selectedStatus" id="">
        <option value="">-- filtra per stato --</option>
        <option v-for="status in statusOptions" :value="status" :key="status">{{ status.toUpperCase() }}</option>
      </select>
    </div>

  </div>
</template>

<script>
  import store from '../store'

  export default {
    data() {
      return {
        // search: '',
        statusOptions: [
          'alive',
          'dead',
          'unknown'
        ],
        store,
      }
    },
    methods: {
      // onEnter() {
      //   console.log('ho premuto il tasto enter!')
      //   this.$emit('onSearch')
      // }
    }
  }
</script>

<style lang="scss" scoped>

.container  {
  margin: 24px 0;
  display: flex;
  align-items: center;
  gap: 24px;
}
input, select {
  border: 1px solid #333;
  height: 38px;
  padding: 0 20px;
  font-size: 24px;
  border-radius: 10px;

}

</style>