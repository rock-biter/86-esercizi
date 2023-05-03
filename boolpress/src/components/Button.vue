<template>
  <button class="btn">
    <slot />
  </button>
</template>

<script>
  export default {
    
  }
</script>

<style scoped>
  .btn {
    background: #000;
    color: white;
    line-height: 2em;
    font-size: 1.5rem;
    padding: 0 1rem;
    border-radius: 999px;
  }
</style>