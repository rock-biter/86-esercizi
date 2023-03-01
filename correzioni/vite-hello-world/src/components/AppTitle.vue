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
    <span>:</span>
  </h1>
</template>

<style lang="scss" scoped>

.title {
  font-size: 48px;
  font-weight: 300;
}

.title span {
  font-size: 60px;
}

</style>