<template>
  <li class="character card">
    <img :src="character.image" alt="">
    <h3 class="characater__name">{{ character.name }}</h3>
  </li>
  <!-- <li class="character card">
    <img :src="srcImage" alt="">
    <h3 class="characater__name">{{ name }}</h3>
  </li> -->
</template>

<script>
  export default {
    props: {
      // PASSO L'OGGETTO INTERO COME PROP
      character: {
        type: Object,
        required: true
      },
      // IN ALTERNATIVA PASSIAMO I SINGOLI DATI
      // name: {
      //   type: String,
      //   required: true
      // },
      // srcImage: {
      //   type: String,
      //   required: true
      // }
    }
  }
</script>

<style lang="scss" scoped>

.character {
  text-align: center;
  img {
    border-radius: 50% ;
    aspect-ratio: 1/1;
    object-fit: cover;
    display: block;
    margin: 0 auto 24px;
    
  }

  .characater__name {
    font-size: 24px;
  }
}

</style>