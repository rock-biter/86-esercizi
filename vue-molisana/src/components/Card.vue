<template>
  <li class="card">
    <img :src="src" alt="">
    <h3 class="card__title">{{ titolo }}</h3>
  </li>
</template>

<script>
  export default {
    props: {
      titolo: String,
      src: String,
    }
  }

  // function somma(a,b) {
  //   return a + b
  // }

  // somma(5,10)
</script>

<style lang="scss" scoped>
@use '../style/partials/variables' as *;

.card {
  background-color: white;
  padding: 20px;

  .card__title {
    font-size: 18px;
    color: $dark-blue;
  }
}

</style>