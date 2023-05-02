<template>
  <div class="post-card">
    <h3>{{ post.title }}</h3>
    <p>{{ post.category ? post.category.name : '-' }}</p>
    <ul class="tag-list" v-if="post.tags && post.tags.length > 0">
      <li class="tag" v-for="tag in post.tags" :key="tag.id">{{ tag.name }}</li>
    </ul>
  </div>
</template>

<script>
  export default {
    props: {
      post: {
        type: Object,
        required: true
      }
    },
    mounted() {
      console.log(this.post.category)
    },
  }
</script>

<style scoped>

.tag-list {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  align-items: center;
  list-style: none;
}

.tag {
  padding: 0 1rem;
  line-height: 24px;
  font-size: 12px;
  border-radius: 999px;
  background: #a7a7a7;
}
</style>