const { createApp } = Vue
console.log(Vue)
// const createApp = Vue.createApp

const option = {
	data() {
		return {
			message: 'Hello Vue!',
			text: 'Benvenuti in questo framework!',
		}
	},
}

const app = createApp(option)
console.log(app)

app.mount('#app')
