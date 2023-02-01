// console.log('ciao')

const PREZZO_PER_KM = 0.21

// 1. chiedere all'utente in numero di km
let distanza = parseFloat(prompt('Quanti km devi percorrere?'))

if (distanza < 0 || isNaN(distanza)) {
	distanza = 100000000
}

// 2. chiedere la sua eta
const eta = parseInt(prompt('Quanti anni hai?'))
// console.log(distanza, eta)

// 3. calcolare costo del biglietto
// a. calcolare il prezzo base come nKm * 0.21
const prezzoBase = distanza * PREZZO_PER_KM
// console.log(prezzoBase)

let sconto = 0

if (eta >= 65) {
	// b. SE eta >= 65 calcolo lo sconto del 40%
	sconto = prezzoBase * 0.4 // (40 / 100)
} else if (eta <= 18) {
	// ALTRIMENTI SE eta <= 18 calcolo sconto del 20%
	sconto = prezzoBase * 0.2
}

console.log(sconto)

// c. calcolo il prezzo finale come: prezzo base - sconto
const prezzoFinale = prezzoBase - sconto

// 4. stampare a schermo il costo con due cifre decimali
// sostituisce completamente il contenuto esistente dellélemento html con il nuovo valore assegnato
let risultatoElement = document.getElementById('risultato')

risultatoElement = document.querySelector('#risultato')
risultatoElement.innerHTML = prezzoFinale.toFixed(2)

// const contenutoElementoSconto = document.getElementById('sconto').innerHTML
// concatena al contenuto esistente dell'elemento html con id sconto la parte di stringa che si trova dopo il +=
document.getElementById('sconto').innerHTML += ' ' + sconto.toFixed(2)

let a = 10
a = a * 10
a *= 10
