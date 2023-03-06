<template>
  <li
    class="list-group-item d-flex justify-content-between align-items-center">
    <!-- <input type="checkbox" v-model="task.done" /> -->
    <span :class="task.done ? 'text-decoration-line-through' : ''">
      {{ task.text }}- {{  text }}
    </span>

    <!-- <span @click.stop="$emit('onDelete')" class="">
      +
    </span> -->
    <span @click.stop="onClick" class="">
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
        // console.log(this.task)
        this.$emit('onDelete',this.task,3,'pippo') // emettiamo evento custom 'onDelete' e agganciamo un parametro
      }
    }
  }
</script>

<style lang="scss" scoped>

</style>