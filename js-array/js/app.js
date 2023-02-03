console.log('Array')

// dichiariamo un array vuoto
const arrayVuoto = []
arrayVuoto.push(5)

// dichiariamo un array di nomi
const nomi = ['Marco', 'Filippo', 'Carlo', 'Marta', 'Simona', 'Pietro']
console.log(nomi)

// Quanto e lungo il nosatro array?
console.log(nomi.length)

// Stampiamo MArco
let nomeMarco = nomi[0]
console.log(nomeMarco)

// Stampiamo pietro
console.log(nomi[2])

// l'ultimo indice dell' array è sempre lunghezza array - 1
let ultimoIndiceDisponibile = nomi.length - 1
console.log(nomi[ultimoIndiceDisponibile])

// Aggiungo un elemento al mio array
let nuovoNome = 'Gianluca'
nomi.push(nuovoNome)
nomi.push(nuovoNome)
nomi.push(nuovoNome)
nomi.push(nuovoNome)
nomi.push(nuovoNome)
nomi.push(nuovoNome)
nomi.push(nuovoNome)
nomi.push(nuovoNome)
nomi.push(nuovoNome)
nomi.push(nuovoNome)
nomi.push(nuovoNome)
nomi.push(nuovoNome)
nomi.push(nuovoNome)
nomi.push(nuovoNome)

console.log(nomi)

// Tolgo un lemento dal fondo
let ultimoElemento = nomi.pop()
console.log(ultimoElemento)
console.log(nomi)

// Sostitutisco il valori di un indice
nomi[2] = 'Mimmo'
console.log(nomi)

// Quseto crea degli spazi vuoti dentro all'array
// nomi[100] = 'Susan'
// console.log(nomi)

let numeriRandom = []
const numeriDaGenerare = Math.floor(Math.random() * 100)

for (let i = 0; i < 20; i++) {
	let num = Math.floor(Math.random() * 1000) + 1
	numeriRandom.push(num)
}
console.log(numeriRandom)

const pari = []
const dispari = []

let counterPari = 0

// Stampiamo tutti i valori dentro all'array nomi
for (let i = 0; i < numeriRandom.length; i++) {
	let numeroCorrente = numeriRandom[i]

	const resto = numeroCorrente % 2

	if (resto === 0) {
		pari.push(numeroCorrente)
		counterPari++
		// console.log(`Numero corrente: ${numeroCorrente} è pari.`)
	} else {
		// console.log(`Numerocorrente: ${numeroCorrente} è dispari.`)
		dispari.push(numeroCorrente)
	}

	console.log(pari, dispari)

	// console.log(numeroCorrente, resto)
}

console.log(pari, dispari)

console.log(
	`ci sono ${counterPari} numeri pari e ${
		numeriRandom.length - counterPari
	} numeri dispari`
)
