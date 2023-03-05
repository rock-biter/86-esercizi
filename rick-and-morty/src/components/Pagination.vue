<template>
  <ul class="pagination">
    <!-- first link page -->
    <template v-if="currentPage !== 1">
      <li @click="store.currentPage = 1"  class="pag-link first" :class="1 === currentPage ? 'active' : ''" :key="1" >1</li>
      <li v-if="currentPage > maxSideLinkNumber + 2">
        ...
      </li>
    </template>
    <li @click="store.currentPage = currentPage - maxSideLinkNumber - 1 + n" class="pag-link" v-for="n in prevLinkNumber" :key="currentPage - prevLinkNumber - 1 + n">{{ currentPage - prevLinkNumber - 1 + n }}</li>
    <!-- active link page -->
    <li class="pag-link active" :key="currentPage">{{ currentPage }}</li>
    <li @click="store.currentPage = currentPage + n" class="pag-link" v-for="n in nextLinkNumber" :key="currentPage + n">{{ currentPage + n }}</li>
    <!-- last link page -->
    <template  v-if="currentPage !== pages">
      <div v-if="currentPage < pages - maxSideLinkNumber - 1">
        ...
      </div>
      <li @click="store.currentPage = pages" class="pag-link last-page" :class="pages === currentPage ? 'active' : ''" :key="pages" >{{ pages }}</li>
    </template>
  </ul>
</template>

<script>
import store from '../store'

  export default {
    data() {
      return {
        store,
        maxSideLinkNumber: 2
      }
    },
    computed: {
      currentPage() {
        return this.store.currentPage
      },
      pages() {
        return this.store.pages
      },
      prevLinkNumber() {
        const n = this.currentPage - 1
        console.log(n,Math.min(n,this.maxSideLinkNumber + 1))
        return Math.max( Math.min(n,this.maxSideLinkNumber + 1) - 1, 0)
      },
      nextLinkNumber() {
        const n = this.pages - this.currentPage
        return Math.max( Math.min(n,this.maxSideLinkNumber + 1) - 1, 0)
      }
    } 
  }
</script>

<style lang="scss" scoped>
@use '../style/partials/variables' as *;

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
</style>