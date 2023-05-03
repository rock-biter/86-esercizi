<script>
// import Posts from './components/Posts.vue'
import NavBar from './components/NavBar.vue';

export default {
  components: {
    NavBar,
    // Posts
  }
}

</script>

<template>
  <router-view></router-view>
</template>

<style >

.title {
  padding: 2rem 0;
}
</style>
