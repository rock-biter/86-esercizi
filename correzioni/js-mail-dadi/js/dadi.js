const numeroPc = Math.floor(Math.random() * 6 + 1)
const numeroUtente = Math.floor(Math.random() * 6 + 1)

console.log(numeroPc, numeroUtente)
let message = 'Pareggio'

if (numeroPc > numeroUtente) {
	message = 'Hai perso!'
} else if (numeroUtente > numeroPc) {
	message = 'Hai Vinto!'
}

console.log(message)
