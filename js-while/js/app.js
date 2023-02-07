// console.log('while')

// CHIEDIAMO UN NUMERO FINCHÈ NON OTTENIAMO UN NUMERO VALIDO
let numero

console.log(parseInt(numero))
//condizione 1: isNaN(numero)
//condizione 2: numero <= 0

do {
	numero = parseInt(prompt('Inserisci un numero maggiore di zero'))
} while (isNaN(numero))

// while (isNaN(numero)) {
// 	// istruzionei
// 	numero = parseInt(prompt('Inserisci un numero maggiore di zero'))
// }

// // cilco for travestito da while
// for (let i = 0; isNaN(numero); i++) {
// 	// console.log('i: ', i)
// 	numero = parseInt(prompt('Inserisci un numero maggiore di zero'))
// }

console.log('finalmente un numero', numero)

// let soglia = 100
// let somma = 0

// let numero

// while (somma < soglia) {
// 	numero = parseInt(prompt('inserisci un numero'))

// 	if (isNaN(numero)) {
// 		// non dobbiamo fare
// 		continue
// 	}

// 	somma += numero

// 	// if (isNaN(numero) === false) {
// 	// 	somma += numero
// 	// }

// 	console.log(somma, soglia)
// }

// console.log('fuori dal ciclo while', somma)

const nomi = ['mario', 'Carlo', 'Marta', 'Simona']

for (let i = 0; i < nomi.length; i++) {
	let nomeCorrente = nomi[i]
	console.log(nomeCorrente)
}

// dichiarazione indice
let i = 0

// verifica condizione
while (i < nomi.length) {
	let nomeCorrente = nomi[i]
	console.log(nomeCorrente)

	// istruzione incremento
	i++
}
