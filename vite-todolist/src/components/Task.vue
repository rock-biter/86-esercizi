<template>
  <li
    class="list-group-item d-flex justify-content-between align-items-center">
    <!-- <input type="checkbox" v-model="task.done" /> -->
    <span :class="task.done ? 'text-decoration-line-through' : ''">
      {{ task.text }}- {{  text }}
    </span>

    <span @click="onClick" class="">
      +
    </span>
  </li>
</template>

<script>
  export default {
    props: {
      task: {
        type: Object,
        required: true
      },
      // done: Boolean,
      text: String
    },
    methods: {
      onClick() {
        console.log(this.task)
      }
    }
  }
</script>

<style lang="scss" scoped>

</style>