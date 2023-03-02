<template>
  <footer class="main-footer">
    <div class="container">

      <div class="col">
        <Logo />
      </div>
      <div class="col">
        <FooterMenu :title="menu1.title" :links="menu1.links" />
      </div>
      <div class="col">
        <FooterMenu :title="menu2.title" :links="menu2.links" />
      </div>
    </div>

  </footer>
</template>

<script>
  import Logo from './Logo.vue'
  import FooterMenu from './FooterMenu.vue'

  export default {
    components: {
      Logo,
      FooterMenu,
    },
    data() {
      return {
        menu1: {
          title: 'Pastificio',
          links: [
            'Il pastificio',
            'Grano',
            'Filiera',
            '100 anni di pasta',
            'Sartoria della pasta'
          ]
        },
        menu2: {
          title: 'Prodotti',
          links: [
            'Le classiche',
            'Le integrali',
            'Le Speciali',
            'Le Biologiche',
            'Le Gluten-free'
          ]
        }
      }
    }
  }
</script>

<style lang="scss" scoped>
@use '../style/partials/variables' as *;

.container {
  display: flex;
  flex-wrap: wrap;
  gap: 32px;
  padding: 40px 0;

  .col {
    flex-grow: 1;
    flex-basis: 0;
  }
}

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

.main-footer {
  background-image: url('/images/footer-montagne-bottom.jpg');
  background-repeat: repeat-x;
  background-position: bottom center;
  padding-bottom: 120px;
}


</style>