const { createApp } = Vue

// console.log(axios)

createApp({
	data() {
		return {
			name: 'Gianni',
			names: [],
		}
	},
	methods: {
		fetchName() {
			axios
				.get('https://flynn.boolean.careers/exercises/api/random/name')
				.then((res) => {
					// res  = risposta del resrver
					// res.data = dati contenuti nella risposta
					console.log(res.data.response)
					this.names.push(res.data.response)
				})
		},
	},
	mounted() {
		for (let i = 0; i < 10; i++) {
			this.fetchName()
		}
	},
}).mount('#app')
