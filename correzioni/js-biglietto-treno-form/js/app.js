console.log('ciao')
const PREZZO_PER_KM = 0.21

// alert('ciao mondo')

// 1. al click sul pulsante calcola, calcoare il prezzo del biglietto
const buttonEl = document.getElementById('calcola')
console.log(buttonEl) //non e un numero
const inputDistanzaEl = document.getElementById('distanza')
console.dir(inputDistanzaEl)
// let km //= inputDistanzaEl.value
// console.log(km)
const selectEl = document.getElementById('sconto')
console.log(selectEl.value)

buttonEl.addEventListener('click', function () {
	console.log('click su pulsante')

	// Calcolando il prezzo base
	let km = inputDistanzaEl.value //stringa
	// console.log(typeof km, km.length)
	let kmNumber = parseFloat(km) //numero
	console.log(kmNumber, typeof kmNumber)

	let prezzoBase = kmNumber * PREZZO_PER_KM

	console.log('prezzo base', prezzoBase)

	// Gestire lo sconto:
	let sconto = 0
	const scontoSelezionato = selectEl.value
	console.log(scontoSelezionato, typeof scontoSelezionato)

	// casistiche posibili: 'caso-1', 'caso-2', ''
	if (scontoSelezionato === '1') {
		sconto = prezzoBase * 0.2
	} else if (scontoSelezionato === '2') {
		sconto = prezzoBase * 0.4
	}

	const prezzoFinale = prezzoBase - sconto

	console.log(prezzoBase, sconto, prezzoFinale)
})

// questo viene eseguito 1 volta prima della funzione del event listener
// const prezzoBase = 0.21 * 100
// console.log('prezzo base:', prezzoBase)

// let a = '100'
// a = parseInt(a)

// console.log(a)

// const stampaAEl = document.getElementById('stampa-a')

// stampaAEl.addEventListener('click', function () {
// 	console.log(a)
// })
