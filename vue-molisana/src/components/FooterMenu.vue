<template>
  <div class="footer__menu">
    <h3>{{ title }}</h3>
    <ul class="menu">
      <li v-for="(link,i) in links" :key="i" class="menu-item">{{  link  }}</li>
    </ul>
  </div>
</template>

<script>
  export default {
    // props: ['title','links'],
    // props: {
    //   title: String,
    //   links: Array
    // }
    props: {
      title: {
        type: String,
        required: true
      },
      links: {
        type: Array,
        required: true
      }
    }
    // data() {
    //   return {
    //     title: 'Pastificio',
    //     links: [
    //       'Il pastificio',
    //       'Grano',
    //       'Filiera',
    //       '100 anni di pasta',
    //       'Sartoria della pasta'
    //     ]
    //   }
    // }
  }
</script>

<style lang="scss" scoped>
@use '../style/partials/variables' as *;

.footer__menu {

  h3 {
    font-size: 24px;
    text-transform: uppercase;
    color: $dark-blue;
    margin-bottom: 24px;;
  }

  .menu-item {
    line-height: 24px;
    font-size: 18px;
  }
}
</style>