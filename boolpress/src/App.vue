<script>
import Posts from './components/Posts.vue'

export default {
  components: {
    Posts
  }
}

</script>

<template>
  <div class="container">
    <h1 class="title">
      Posts
    </h1>
    <Posts />
  </div>
</template>

<style >

.title {
  padding: 2rem 0;
}
</style>
