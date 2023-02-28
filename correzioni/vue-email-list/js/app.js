const { createApp } = Vue

createApp({
	data() {
		return {
			emailList: [],
		}
	},
	methods: {
		fetchEmail() {
			axios
				.get('https://flynn.boolean.careers/exercises/api/random/mail')
				.then((res) => {
					console.log(res, res.data)
					const { response: email } = res.data
					// const email = res.data.response
					console.log(email)
					this.emailList.push(email)
				})
		},
		fetchEmailList(num) {
			for (let i = 0; i < num; i++) {
				this.fetchEmail()
			}
		},
	},
	created() {
		this.fetchEmailList(100)
	},
}).mount('#app')
