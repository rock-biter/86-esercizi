<template>
  <div>
    <div class="posts">
      <PostCard v-for="post in posts" :key="post.id" :post="post" >
        Ciao
      </PostCard>
      
    </div> 
    <!-- <ul class="pagination">
      <li :class="[ n === currentPage ? 'active' : '', 'page-link']" v-for="n in lastPage" @click="fetchPosts(n)" :key="n">{{ n }}</li>
      
    </ul> -->

    <ul class="pagination">
      <li :class="[ link.active ? 'active' : '', 'page-link']" v-for="link in links" @click="fetchPostsByUrl(link.url)" :key="link.label" v-html="link.label"></li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios'
import PostCard from './PostCard.vue'

  export default {
    components: {
      PostCard
    },
    data() {
      return {
        posts: [],
        lastPage: 0,
        currentPage: 1,
        links: []
      }
    },
    methods: {
      fetchPosts(page) {
        // this.currentPage = page
        axios.get('http://127.0.0.1:8000/api/posts',{
          params: {
            page: page
          }
        })
        .then(res => {
          // console.log(res)
          const results = res.data.results
          this.links = results.links
          this.lastPage = results.last_page
          this.posts = results.data
          this.currentPage = results.current_page
        })
        .catch(err => {
          console.log(err)
        })
      },
      fetchPostsByUrl(url) {
        axios.get(url)
        .then(res => {
          // console.log(res)
          const results = res.data.results
          this.links = results.links
          this.lastPage = results.last_page
          this.posts = results.data
          this.currentPage = results.current_page
        })
        .catch(err => {
          console.log(err)
        })
      }
    },
    mounted() {
      this.fetchPosts(this.currentPage)
    },
  }
</script>

<style  scoped>

.posts {
  display: grid;
  gap: 1.5rem;
  grid-template-columns: repeat(4,1fr);
}

.pagination {
  display: flex;
  gap: 0.75rem;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  padding: 1rem 0;
}
.page-link {
  background: #ddd;
  border-radius: 50%;
  width: 2rem;
  aspect-ratio: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  white-space: nowrap;
}


.page-link.active {
  background: crimson;
  color: white;
}
</style>