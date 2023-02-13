// setTimeout(myFunction, 3000) //stampa dopo 3 secondi

// console.log('Ciao') //viene stampato per primo

// function myFunction() {
// 	console.log('Ciao Asincrono')

// 	altraFunzione()
// }

// function altraFunzione() {
// 	console.log('ciao 2')
// }

// setTimeout(esciDalParcheggio, 4000)

// passaAuto('Macchina nera')
// passaAuto('Macchina rossa')

// function esciDalParcheggio() {
// 	console.log('Esco dal parcheggio!')
// }

// function passaAuto(nomeAuto) {
// 	console.log('Sta passando la ' + nomeAuto)
// 	// codice che fa passare l'automobile nomeAuto
// 	console.log('È passata la ' + nomeAuto)
// }

// const clock = setInterval(myFunction, 1000)
// const clock2 = setInterval(myFunction2, 4000)

// console.log('dopo set interval', clock, clock2)

// // funzione con nome
// function myFunction() {
// 	console.log('ciao')
// }

// function myFunction2() {
// 	console.log('eccomi')
// }

// clearInterval(clock)

// creonometro
// let counter = 0
// let clock

// const startEl = document.getElementById('start')
// const stopEl = document.getElementById('stop')
// const clockEl = document.getElementById('cronometro')

// console.log(startEl, stopEl, clockEl)

// startEl.addEventListener('click', function () {
// 	console.log(clock)

// 	if (!clock) {
// 		clock = setInterval(function () {
// 			counter++
// 			// console.log(counter)
// 			clockEl.innerHTML = counter
// 		}, 1000)
// 	}
// })

// stopEl.addEventListener('click', function () {
// 	clearInterval(clock)
// 	console.log(clock)
// 	clock = undefined
// 	counter = 0
// })

// const countEl = document.getElementById('count')

// let counter = 10
// countEl.innerHTML = counter
// const time = 1000

// let clock = setInterval(onInterval, 1000)

// function onInterval() {
// 	counter--

// 	console.log(counter)

// 	if (counter === 0) {
// 		//interrompere
// 		clearInterval(clock)
// 		countEl.innerHTML = 'Buon anno'
// 	} else {
// 		countEl.innerHTML = counter
// 	}
// }

// console.log(counter)

// function getTime() {
// 	return 1000
// }

// const btnEl = document.getElementById('start-timer')
// const inputEl = document.getElementById('timer')

// btnEl.addEventListener('click', function () {
// 	let min = parseInt(inputEl.value)
// 	if (isNaN(min)) {
// 		min = 0
// 	}
// 	const milliseconds = min * 60 * 1000
// 	console.log(min)

// 	setTimeout(function () {
// 		console.log('La pasta è pronta')
// 	}, milliseconds)
// })

somma(5, 6)
// sum(4, 6) // error

function somma(a, b) {
	return a + b
}

const sum = (a, b) => {
	return a + b
}

// const sum = (a, b) => a + b //arrow con ritorno implicito

// function pow2(a) {
//   return a**2
// }

const pow2 = (a) => a ** 2

const sayHello = () => console.log('ciao')

console.log(somma(5, 9))
console.log(sum(5, 9))
