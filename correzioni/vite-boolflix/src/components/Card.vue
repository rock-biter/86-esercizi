<template>
  <li class="card">
    <h3>{{ item.title }}</h3>
    <h4>{{ item.original_title }}</h4>
    <p>{{ item.language }}</p>
    <p>{{ item.vote_average }}</p>
  </li>
</template>

<script>
  export default {
    props: {
      item: {
        type: Object,
        required: true
      }
    }
  }
</script>

<style lang="scss" scoped>

</style>