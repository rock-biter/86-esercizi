<template>
  <DefaultLayout>
    <template v-if="loading === false">
      <div class="container py-4">
        <img v-if="post.cover_image" :src="post.cover_path" alt="">

        <h1 class="text-3xl font-bold">
          {{ post.title }}
        </h1>
        <h2>{{  post.user.name }}</h2>
        <p class="bg-amber-400 px-3 rounded-full w-max" v-if="post.category">{{ post.category.name }}</p>

        <ul class="flex gap-2 items-center flex-wrap">
          <li class="italic text-slate-500" v-for="tag in post.tags" :key="tag.slug">{{ tag.name }}</li>
        </ul>
      </div>

      <div class="container py-8">
        <div v-html="post.content"></div>
      </div>

      <div class="container py-8" v-if="relatedPosts.length > 0">
        <ul class="grid grid-cols-3 gap-8">
          <li v-for="related in relatedPosts" :key="related.id">
            <PostCard :post="related" />
          </li>
        </ul>

      </div>

    </template>
    <div class="animate-pulse" v-else>
      ...loading
    </div>
  </DefaultLayout>
</template>

<script>
import DefaultLayout from '../layouts/Default.vue';
import axios from 'axios'
import PostCard from '../components/PostCard.vue';

  export default {
    components: {
      DefaultLayout,
      PostCard
    },
    data() {
      return {
        post: null,
        loading: true
      }
    },
    props: ['slug'],
    computed: {
      relatedPosts() {
        if(this.post.category) {
          return this.post.category.posts
        }

        return []
      },
    
    },
    methods: {
      fetchPost(slug) {

        this.loading = true

        axios.get(`http://127.0.0.1:8000/api/posts/${ slug }`) //this.$route.params.slug
        .then(res => {
          const { success, post } = res.data

          if(success) {
            this.post = post
          } else {
            // this.$router.push({ name: '404' })
            this.$router.replace({ name: '404' })
          }

        })
        .catch(err => {
          // console.log(err)
          this.$router.replace({ name: '404' })
        })
        .finally(() => {
          
          this.loading = false

        }) 
      }

    },
    created() {
      this.fetchPost(this.slug)
    },
    beforeRouteUpdate(to,from) {
      // console.log('to route:',to)
      // console.log('from route:',from)
      const newSlug = to.params.slug
      console.log(newSlug)
      
      this.fetchPost(newSlug)

    }
    
  }
</script>

<style lang="scss" scoped>

</style>