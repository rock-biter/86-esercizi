<script>
export default {
  data() {
    return {
      title: 'La mia prima app con Vite!'
    }
  }
}

</script>

<template>
  <h1 class="title">
    {{  title }}
  </h1>
</template>

<style scoped>

.title {
  font-size: 48px;
  font-weight: 300;
}
</style>