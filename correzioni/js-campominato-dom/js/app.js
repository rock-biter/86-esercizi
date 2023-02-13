console.log('griglia')

const platBtnElement = document.getElementById('play-btn')
const grigliaElement = document.querySelector('.griglia')
let celleElements
let lato = 8

// console.log(platBtnElement)
platBtnElement.addEventListener('click', startGame) //sen le tonde altrimenti viene invocata subito

// no numeri doppi
// nuimeri compresi tra 1 3 numeroDiCelle
let bombe = [5, 54, 9, 21, 36, 64]
console.log(bombe)

let punteggio = 0

function resetGame() {
	// azzerare il punteggio
	punteggio = 0

	// svuotare la griglia
	grigliaElement.innerHTML = ''

	// eliminare eventuali messaggi di game over...
}

function generaGriglia(latoGriglia) {
	let numeroCelle = latoGriglia * latoGriglia

	for (let i = 0; i < numeroCelle; i++) {
		let num = i + 1
		// console.log(num)
		let divString = `<div class="cella" style="width: calc(100% / ${latoGriglia});" >${num}</div>` // <div> + num + </div>

		grigliaElement.innerHTML += divString
	}
}

function generaBombe(numeroBombe, min, max) {
	let arrayBombe = []

	// let i = 1
	//generazione numeri random diversi
	while (arrayBombe.length < numeroBombe) {
		const num = getRandomIntInclusive(min, max)

		// if( arrayBombe.includes(num) === false ) {
		// 	arrayBombe.push(num)
		// }

		if (!arrayBombe.includes(num)) {
			arrayBombe.push(num)
		}

		// i++
	}

	// console.log(i)

	return arrayBombe
}

function startGame() {
	console.log('start game')

	// eseguire tutte le operazioni di reset
	resetGame()

	let numeroCelle = lato * lato
	bombe = generaBombe(16, 1, numeroCelle)

	console.log(bombe)
	generaGriglia(lato)

	celleElements = document.querySelectorAll('.cella')
	// console.log(celleElements)

	for (let i = 0; i < celleElements.length; i++) {
		const cella = celleElements[i]

		cella.addEventListener('click', onClick)
	}

	return 'Fine star game'
}

function onClick(event) {
	// console.log(event)
	// console.log(event.target)
	// console.log(this)
	// console.log(event.target === this)
	// const cella = event.target
	const cella = this
	console.log(cella.innerHTML)

	const numeroCella = parseInt(cella.innerHTML)
	// console.log(quadrato)

	// controllare se numeroCella è una bomba

	if (isBomb(numeroCella)) {
		// game over
		gameOver()

		console.log(numeroCella, 'è una bomba')
		cella.classList.add('bg-red')
	} else {
		// imcrementare il punteggio
		console.log(numeroCella, 'non è una bomba')
		punteggio++
		console.log(punteggio)
		cella.classList.add('bg-green')

		// controllo se utente ha vinto
		let numeroCaselleSenzaBombe = lato * lato - bombe.length
		if (punteggio === numeroCaselleSenzaBombe) {
			console.log('hai vinto')
		}
	}

	cella.removeEventListener('click', onClick)
	// console.log(i + 1)
}

function isBomb(numero) {
	const result = bombe.includes(numero)
	return result
}

function gameOver() {
	console.log(`Hai perso! Punti totalizzatio: ${punteggio}.`)

	// rimuovendo tutti gli event listenere dalle celle della griglia
	for (let i = 0; i < celleElements.length; i++) {
		const cella = celleElements[i]

		const numCella = parseInt(cella.innerHTML)
		console.log(numCella)

		if (isBomb(numCella)) {
			cella.classList.add('bg-red')
		}

		cella.removeEventListener('click', onClick)
	}
}

// grigliaElement.addEventListener('click', function (event) {
// 	console.log('target:', event.target)
// 	console.log('this:', this)

// 	let griglia = this
// 	let cella = event.target
// 	cella.classList.add('bg-green')
// })

function getRandomIntInclusive(min, max) {
	min = Math.ceil(min)
	max = Math.floor(max)
	return Math.floor(Math.random() * (max - min + 1) + min) // The maximum is inclusive and the minimum is inclusive
}
