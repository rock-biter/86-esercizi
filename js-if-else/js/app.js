// console.log('works')

// LUNGHEZZA PAROLE

// const primaParola = prompt('Inserisci una parola')
// const secondaParola = prompt('Inserisci una seconda parola')

// console.log(primaParola, secondaParola)

// console.log('lunghezza prima parola:', primaParola.length)
// console.log('lunghezza seconda parola:', secondaParola.length)

// const lunghezza1 = primaParola.length
// const lunghezza2 = secondaParola.length

// if (lunghezza2 > lunghezza1) {
// 	console.log('La parola più lunga è:', secondaParola)
// } else if (lunghezza1 === lunghezza2) {
// 	console.log('Le due parole hanno la stessa lunghezza')
// } else {
// 	console.log('La parola più lunga è:', primaParola)
// }

// ETA

// // 1. chiediamo eta persona 1
// const eta1 = parseInt(prompt('Eta persona uno'))
// // 2. chiediamo eta persona 2
// let eta2 = prompt('Eta persona due')
// eta2 = parseFloat(eta2)

// console.log(eta1, eta2)
// // 3. stampiamo in console quale delle due è più grande

// let message = ''

// if (eta1 > eta2) {
// 	message = 'La prima persona è più grande'
// } else if (eta2 > eta1) {
// 	message = 'La seconda persona è piau grande'
// } else {
// 	message = 'Hanno la stessa eta'
// }

// console.log(message)

// PARI DISPARI
// 1. chiedere all'utente se vuole pari o dispari
const sceltaUtente = prompt('Scrivi pari o dispari')
console.log(sceltaUtente)
// // // 2. chidere un numero intero da 1 a 9
const numeroUtente = parseInt(prompt('Scegli un numero da 1 a 9'))
console.log(numeroUtente)
// 3. generare un numero random per il pc da 1 a 9
const numeroPc = Math.floor(Math.random() * (9 - 1 + 1) + 1)
console.log(numeroPc)
// console.log(Math.ceil(1.1))
// console.log(Math.floor(1.9))
// console.log(Math.round(1.9))
// console.log(Math.round(1.5))
// 4. sommiamo i due numeri
const somma = numeroPc + numeroUtente
console.log(somma)
// 5. stabilire il vincitore:
//    controllaimo se in numero è pari
const resto = somma % 2
console.log(resto)

// if (resto === 0) {
// 	console.log('il numero è pari')
// } else {
// 	console.log('il numero è dispari')
// }

if (sceltaUtente === 'pari') {
	// utente ha scleto pari

	if (resto === 0) {
		// se il numero è pari
		console.log('utente vince!')
	} else {
		// se il numero è dispari
		console.log('utente perde!')
	}
} else {
	// se utente ha scelto dispari
	if (resto === 0) {
		// se il numero è pari
		console.log('utente perde!')
	} else {
		// se il numero è dispari
		console.log('utente vince!')
	}
}

// if (resto === 0 && sceltaUtente === 'pari') {
// 	console.log('utente vince!')
// } else if (resto === 1 && sceltaUtente === 'dispari') {
// 	console.log('utente vince!')
// } else {
// 	console.log('utente perde!')
// }

// const primaCondizione = resto === 0 && sceltaUtente === 'pari'
// const secondaCondizione = resto === 1 && sceltaUtente === 'dispari'

// if (primaCondizione || secondaCondizione) {
// 	console.log('utente vince!')
// } else {
// 	console.log('utente perde!')
// }

// if (
// 	(resto === 0 && sceltaUtente === 'pari') ||
// 	(resto === 1 && sceltaUtente === 'dispari')
// ) {
// 	console.log('utente vince!')
// } else {
// 	console.log('utente perde!')
// }

// const numero = prompt('numero:')

// if (numero > 50) {
// 	console.log('numero maggiore di 50')
// } else if (numero > 30) {
// 	console.log('numero nimor di 50 ma maggiore di 30')
// } else {
// 	console.log('numero minore di 30')
// }

// ETA

// const annoDiNascita = parseInt(prompt('In che anno sei nato?'))
// console.log(annoDiNascita)

// const now = new Date()
// const annoCorrente = now.getFullYear()
// console.log(annoCorrente)

// if (isNaN(annoDiNascita) || annoDiNascita > annoCorrente) {
// 	// let annoDiNascita = 1853
// 	console.log('anno di nascita non valido', annoDiNascita)
// 	let miaVar = 'mimmo'
// } else {
// 	const durata = annoCorrente - annoDiNascita
// 	console.log(durata)
// }

// {
// 	const varibileInterna = 'ciao'
// 	console.log(annoDiNascita)
// }

// da qui non vedo dentro al blocco
// console.log(miaVar)

// 1. chiediamo all'utente un frutto
// const frutto = prompt('Che frutta vuoi?')
// console.log(frutto)
// // 2.
// // SE mela => non c'è caduta nel bidet
// if (frutto === 'pera') {
// 	console.log('La Pera è presente.')
// }

// if (frutto === 'kiwi') {
// 	console.log("Il kiwi non c'è è caduto nel bidet!")
// }

// if (frutto === 'ciliegia') {
// 	console.log(frutto)
// }

// let message = ''

// switch (frutto) {
// 	case 'mela':
// 		message = 'La mela non c è'
// 		break
// 	case 'pera':
// 		message = 'La pera c è'
// 		break
// 	case 'banana':
// 		let nuovaVar = prompt('Dimmi perchè hai scelta questo frutto.')
// 		console.log(nuovaVar)
// 		message = 'La banane non c è è caduta nel bidet'
// 		break
// 	default:
// 		message = 'Il frutto che hai scelto non esiste!'
// }

// console.log(message)

// SE pera =>  c'è
// SE kiwi => non c'è caduta nel bidet
// SE ciliegia => non c'è caduta nel bidet
// SE banana => non c'è caduta nel bidet
// SE cocomero => c'è
// SE mango => non c'è caduta nel bidet
// SE arancia => c'è
