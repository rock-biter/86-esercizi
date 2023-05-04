<template>
  <header class="py-3 bg-slate-100">
    <div class="container nav">
      
      <router-link :to="{ name: 'home'}">Boolpress</router-link>
  
      <ul class="nav__menu">
        <li>
          <router-link :to="{name: 'home'}">Home</router-link>
        </li>
        <li>
          <router-link :to="{name: 'posts.index'}">Blog</router-link>
        </li>
        <li>
          <router-link :to="{name: 'about'}">Chi siamo</router-link>
        </li>
        <li>
          <router-link to="/contacts">Contatti</router-link>
        </li>
      </ul>
  
    </div>
  </header> 
</template>

<script>
  export default {
    mounted() {
      console.log('nav bar mounted hook')
    }
  }
</script>

<style scoped>

.nav, .nav__menu {
  display: flex;
  align-items: center;
  gap: 2rem;
}

.nav__menu {
  margin-left: auto;
}

</style>