<template>
  <header class="main-header">
    <div class="container">
      <Logo />

      <nav class="main-menu">
        <ul>
          <li class="menu-item">Home</li>
          <li class="menu-item active">Prodotti</li>
          <li class="menu-item">Chi Siamo</li>
          <li class="menu-item">Contatti</li>
        </ul>
      </nav>
    </div>
  </header>
</template>

<script>
import Logo from './Logo.vue'

export default {
  components: {
    Logo
  }
  
}
</script>

<style lang="scss" scoped>
@use '../style/partials/variables' as *;

.main-header {
  text-align: center;

  .container {
    padding: 40px 0;
  }

  ul {
    display: flex;
    justify-content: center;

    .menu-item {
      line-height: 60px;
      padding: 0 20px;
      font-size: 24px;

      &.active, &:hover {
        background-color: $color-active-link;
      }
    }

    // .menu-item.active {
    //   background-color: #DAEDF3;
    // }
  }
}


</style>