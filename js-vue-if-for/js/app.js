const { createApp } = Vue

createApp({
	data() {
		return {
			// message: 'Benvenuto Amministratore!',
			// isAdmin: false,
			// className: 'bg-red',
			// users: ['Gianni', 'Filippo', 'Maria', 'Anna', 'Carlo'],
			// car: {
			// 	color: 'red',
			// 	brand: 'Volvo',
			// 	model: 'VC-90',
			// 	cc: 1900,
			// },
			point: 0,
			bombe: [16, 15, 26, 35, 48, 59, 21],
			latoGriglia: 10,
			difficolta: '0',
			caselleCliccate: [],
		}
	},
	methods: {
		userIsAdmin() {
			console.log('this.isAdmin:', this.isAdmin)
			return this.isAdmin === true
		},
		impostaDifficolta() {
			console.log(this.difficolta)

			switch (this.difficolta) {
				case '0':
					this.latoGriglia = 10
					break
				case '1':
					this.latoGriglia = 8
					break
				case '2':
					this.latoGriglia = 7
					break
			}
		},
		onClick(number) {
			//
			if (this.caselleCliccate.includes(number) === false) {
				console.log('click', number)
				this.caselleCliccate.push(number)

				if (this.bombe.includes(number)) {
					console.log('hai preso una bomba')
				} else {
					console.log('Sei salvo')
					this.point++
				}
			}

			console.log(this.caselleCliccate)
		},
	},
}).mount('#app')

let win = true
// let message = ''

// if (win === true) {
// 	message = 'Hai vinto'
// } else {
// 	message = 'Hai perso'
// }

let message = win === true ? 'Hai vinto' : 'Hai perso'

console.log(message)

function getMessage(condition) {
	return condition === true ? 'Hai vinto' : 'Hai perso'
}

console.log(getMessage(true))
//
