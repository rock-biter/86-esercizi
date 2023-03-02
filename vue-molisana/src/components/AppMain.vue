<template>
  <main class="content">
    <div class="container">
      <ul class="grid">
        <!-- <li v-for="(pasta,i) in pastas" :key="i" class="card">
          <img :src="pasta.src" alt="">
          <h3 class="card__title">{{ pasta.titolo }}</h3>
        </li> -->
        <Card class="col" v-for="(pasta,i) in pastas" :key="i" :titolo="pasta.titolo" :src="pasta.src" />
      </ul>
    </div>
  </main>
</template>

<script>
  import Card from './Card.vue'
  export default {
    components: {
      Card
    },
    data() {
      return {
        pastas: [
          {
          src: "https://www.lamolisana.it/wp-content/uploads/2021/04/1-spaghetto-quadrato.jpg",
          titolo: "N.4 Spaghetto Quadrato Bucato",
          tipo: "lunga",
          cottura: 6,
          },
          {
          src: "https://www.lamolisana.it/wp-content/uploads/2021/04/5-fettuccine.jpg",
          titolo: "N.5 Fettuccine",
          tipo: "lunga",
          cottura: 13,
          },
          {
          src: "https://www.lamolisana.it/wp-content/uploads/2021/04/6-linguine.jpg",
          titolo: "N.6 Linguine",
          tipo: "lunga",
          cottura: 12,
          },
          {
          src: "https://www.lamolisana.it/wp-content/uploads/2021/04/7-mezze-linguine.jpg",
          titolo: "N.7 Mezze Linguine",
          tipo: "lunga",
          cottura: 11,
          },
          {
          src: "https://www.lamolisana.it/wp-content/uploads/2021/04/11-spaghettino-quadrato.jpg",
          titolo: "n.11 Spaghettino Quadrato",
          tipo: "lunga",
          cottura: 9,
          },
          {
          src: "https://www.lamolisana.it/wp-content/uploads/2021/05/38-mezze-maniche.jpg",
          titolo: "N.38 Mezze maniche",
          tipo: "corta",
          cottura: 12,
          },
          {
          src: "https://www.lamolisana.it/wp-content/uploads/2021/05/44-sedani.jpg",
          titolo: "N.44 Sedani",
          tipo: "corta",
          cottura: 8,
          },
          {
          src: "https://www.lamolisana.it/wp-content/uploads/2021/05/49-sedani.jpg",
          titolo: "N.49 Sedanini",
          tipo: "corta",
          cottura: 8,
          },
          {
          src: "https://www.lamolisana.it/wp-content/uploads/2021/05/53-lumachine.jpg",
          titolo: "N.53 Lumachine",
          tipo: "corta",
          cottura: 12,
          },
          {
          src: "https://www.lamolisana.it/wp-content/uploads/2021/05/55-chifferi-rigati.jpg",
          titolo: "N.55 Chifferi rigati",
          tipo: "corta",
          cottura: 12,
          },
          {
          src: "https://www.lamolisana.it/wp-content/uploads/2021/05/58-misto-corto.jpg",
          titolo: "N.58 Misto corto",
          tipo: "corta",
          cottura: 9,
          },
          {
          src: "https://www.lamolisana.it/wp-content/uploads/2021/06/84-ditale-quadrato.jpg",
          titolo: "N.84 Ditale Quadrato",
          tipo: "cortissima",
          cottura: 12,
          },
        ]
      }
    }
    
  }
</script>

<style lang="scss" scoped>
@use '../style/partials/variables' as *;

.content {
  background-image: url('/images/fondo-pag-speciali.jpg');
  padding: 40px 0;
  text-align: center;
  font-size: 32px;
}

.grid {
  display: flex;
  flex-wrap: wrap;
  // grid-template-columns: repeat(3,1fr);
  gap: 10px;

  .col {
    flex-grow: 1;
    flex-basis: 30%;
  }

  // .col:nth-child(2n) {
  //   width: 30%;
  // }

  // .col:nth-child(2n + 1) {
  //   width: 60%;
  // }
}

.card {
  background-color: white;
  padding: 20px;

  .card__title {
    font-size: 18px;
    color: $dark-blue;
  }
}

</style>