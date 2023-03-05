<template>
  <footer>
    <div class="container">
      <div class="pagination-info">
        <span class="in-page">{{ store.characters.length }}</span> di <span class="total">{{ store.count }}</span>
      </div>
      <ul class="pagination">
        <li class="pag-link" :class="n === store.currentPage ? 'active' : ''" v-for="n in store.pages" :key="n">{{ n }}</li>
      </ul>
      <!-- <Pagination /> -->
    </div>
  </footer>
</template>

<script>
  import store from '../store'
  // import Pagination from './Pagination.vue';

  export default {
    // components: {
    //   Pagination,
    // },
    data() {
      return {
        store
      }
    }
  }
</script>

<style lang="scss" scoped>
@use '../style/partials/variables' as *;

footer {
  padding: 30px;
  background-color: $bg-color;
  position: sticky;
  bottom: 0;

  .pagination-info {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px 0;
    gap: 1rem;

    .in-page, .total {
      font-size: 20px;
    }

    .in-page {
      font-weight: bold;
    }
  }
  .pagination {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    align-items: center;
    justify-content: center;

    .pag-link {
      aspect-ratio: 1/1;
      border-radius: 50%;
      flex-shrink: 0;
      width: 36px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 18px;
      background: white;

      &.active {
        background-color: $text-color;
        color: white;
      }
    }

  }

}

</style>