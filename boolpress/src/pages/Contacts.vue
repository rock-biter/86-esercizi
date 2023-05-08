<template>
  <DefaultLayout>
    <div class="container py-8">

      <h1>
        Contattami!
      </h1>
    </div>

    <div class="container">
      <div v-if="success" class="bg-green-200 p-2 rounded-md border border-green-300 shadow-md mb-3">
        Messaggio inviato con successo!
      </div> 
      <form @submit.prevent="sendForm" >

        <div class="grid grid-cols-2 gap-8">
          <p>
            <label class="block mb-1" for="">Name</label>
            <input v-model="name" :class="[ errors && errors.name ? 'text-red-500 border-red-500' : 'border-slate-500' ,'border rounded-md w-full  px-2']" type="text" name="name" placeholder="Nome" >
            <span>caratteri rimasti: {{ 255 - name.length }}</span>
            <small v-if="errors && errors.name" class="text-red-500">
              <span v-for="error in errors.name" :key="error">{{ error }}</span>
            </small>
          </p>

          <p>
            <label class="block mb-1" for="">Email</label>
            <input v-model="email" :class="[ errors && errors.email ? 'text-red-500 border-red-500' : 'border-slate-500' ,'border rounded-md w-full  px-2']" type="email" name="email" placeholder="Indirizzo email" >
            <small v-if="errors && errors.email" class="text-red-500">
              <span v-for="error in errors.email" :key="error">{{ error }}</span>
            </small>
          </p>

          <p class="col-span-2">
            <label class="block mb-1" for="">Messaggio</label>
            <textarea v-model="message" :class="[ errors && errors.message ? 'text-red-500 border-red-500' : 'border-slate-500' ,'border rounded-md w-full  px-2']" name="message" id="" cols="30" rows="4" placeholder="Messaggio"></textarea>
            <small v-if="errors && errors.message" class="text-red-500">
              <span v-for="error in errors.message" :key="error">{{ error }}</span>
            </small>
          </p>
        </div>
        
        <button v-if="loading === false" type="submit" :class="[ !nameIsValid || !emailIsValid || !messageIsValid ? 'opacity-30' : '', 'bg-amber-500 px-2 rounded-md']">Invia</button>
        <div class="animate-pulse" v-else>sending...</div>
      </form>
    </div>

  </DefaultLayout>
</template>

<script>
import axios from  'axios'
import DefaultLayout from '../layouts/Default.vue';
  export default {
    components: {
      DefaultLayout
    },
    data() {
      return {
        name: '',
        email: '',
        message: '',
        success: false,
        errors: null,
        loading: false
      }
    },
    computed: {
      nameIsValid() {
        return this.name.trim() !== '' && this.name.trim().length <= 255 
      },
      emailIsValid() {
        return this.email.trim() !== '' && this.email.trim().length <= 255 
      },
      messageIsValid() {
        return this.message.trim() !== ''
      }
    },
    methods: {
      validate() {

        // const nameIsValid = this.name.trim() !== ''
        // const emailIsValid = this.email.trim() !== ''
        // const messageIsValid = this.message.trim() !== ''

        return this.nameIsValid && this.emailIsValid && this.messageIsValid

      },
      sendForm() {
        console.log('invio il form')

        const data = {
          name: this.name,
          email: this.email,
          message: this.message
        }

        console.log(data)

        if(this.validate() === false) {
          alert('Compila il form')
          return 
        }

        this.loading = true

        axios.post('http://127.0.0.1:8000/api/contacts',data)
          .then(res => {
            console.log(res.data)
            const { success, errors } = res.data

            this.success = success

            if(success) {
              this.name = ''
              this.email = ''
              this.message = ''
              this.errors = null
            } else {
              this.errors = errors
            }
            
          })
          .catch(err => {
            console.log(err)
          })
          .finally(() => {
            this.loading = false
          })
      }
    }
  }
</script>

<style  scoped>

</style>