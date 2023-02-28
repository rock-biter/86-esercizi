<template>
  <div class="bg-red">
    {{ description }}
  </div>
</template>

<script>
export default {
  data() {
    return {
      description: 'testo della descrizione'
    }
  }
}
</script>

<style>

.bg-red {
  background-color: red;
  color: white;
}

</style>