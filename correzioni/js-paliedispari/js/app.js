console.log('palindroma')

// chiedere una parola all'utente
// const parola = prompt('Inserisci una parola.')

// console.log(parola)

// controllare se è palindroma
// Pippo
// invertire la parola dell'utente ==> oppiP
// confrontare la parola dell'utente con la versione invertita Pippo === oppiP ?

// scrivere all'utente il risultato
// if (isPalindrome(parola)) {
// 	//stampare la parola è palinfrom
// 	console.log(`La parola ${parola} è palindroma.`)
// } else {
// 	//la parola non è palindroma
// 	console.log(`La parola ${parola} non è palindroma`)
// }

function isPalindrome(parolaDaVerificare) {
	// invertire la parolaDaVerificare
	let parola = parolaDaVerificare.toLowerCase()

	// let parolaInvertita = parolaDaVerificare.split('')
	// parolaInvertita = parolaInvertita.reverse()
	// parolaInvertita = parolaInvertita.join('')
	let parolaInvertita = ''
	let lastIndex = parola.length - 1

	for (let i = lastIndex; i >= 0; i--) {
		// const carattare = parola.charAt(i)
		const carattare = parola[i]
		parolaInvertita += carattare
		console.log(carattare, parolaInvertita)
	}

	// confrontare le due stringhe
	console.log(parola, parolaInvertita)
	const result = parola === parolaInvertita

	// return true o false
	return result
}

// PARI o Dispari

// chiedere all'utente se sceglie pari o dispari
let sceltaUtente

do {
	sceltaUtente = prompt('Scrivi pari o dispari')
} while (sceltaUtente !== 'pari' && sceltaUtente !== 'dispari')

console.log(sceltaUtente)

// // chiedere all'utente un numero da 1 a 5
let numero

do {
	numero = parseInt(prompt('Inserisci un numero da 1 a 5'))
} while (isNaN(numero) || numero > 5 || numero < 1)

console.log(numero)

// generiamo un numero random per il pc
const numeroPc = getRandomIntInclusive(1, 5)
console.log(numeroPc)

const somma = numeroPc + numero
console.log(somma)

if (isEven(somma) && sceltaUtente === 'pari') {
	console.log('hai vinto')
	// utente ha vinto se somma è pari e ha scelto pari
} else if (isOdd(somma) && sceltaUtente === 'dispari') {
	// utente ha vinto se somma è dispari e ha scelto dispari
	console.log('hai vinto')
} else {
	// utente ha perso
	console.log('hai perso')
}

// funzione per capire se un numero è pari
function isEven(num) {
	if (isNaN(num)) {
		console.error('Il numero è un NaN')
	}

	const resto = num % 2
	return resto === 0
}

function isOdd(num) {
	if (isNaN(num)) {
		console.error('Il numero è un NaN')
	}

	const resto = num % 2
	return resto === 1
}

// genera un numero random intero tra min e max
function getRandomIntInclusive(min, max) {
	min = Math.ceil(min)
	max = Math.floor(max)
	return Math.floor(Math.random() * (max - min + 1) + min) // The maximum is inclusive and the minimum is inclusive
}
