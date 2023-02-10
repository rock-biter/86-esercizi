console.log('griglia')

const platBtnElement = document.getElementById('play-btn')
const grigliaElement = document.querySelector('.griglia')

// console.log(platBtnElement)
platBtnElement.addEventListener('click', startGame) //sen le tonde altrimenti viene invocata subito

// no numeri doppi
// nuimeri compresi tra 1 3 numeroDiCelle
const bombe = [5, 54, 9, 21, 36, 74]
// startGame()
// bombe.includes('5')

const secondaFunzione = startGame
const altraVariabile = startGame()

// console.log(secondaFunzione)
// console.log(altraVariabile)

function resetGame() {
	// azzerare il punteggio

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

function startGame() {
	console.log('start game')

	// eseguire tutte le operazioni di reset
	resetGame()
	let lato = 8
	generaGriglia(lato)

	const celleElements = document.querySelectorAll('.cella')
	// console.log(celleElements)

	for (let i = 0; i < celleElements.length; i++) {
		const cella = celleElements[i]

		// cella.addEventListener('click', function () {
		// 	console.log(i + 1)
		// 	// const cella = ''
		// 	console.log(cella)
		// })

		cella.addEventListener('click', onClick)
	}

	return 'Fine star game'
}

function onClick(event) {
	console.log(event)
	console.log(event.target)
	console.log(this)
	console.log(event.target === this)
	// const cella = event.target
	const cella = this
	console.log(cella.innerHTML)

	const quadrato = parseInt(cella.innerHTML) ** 2
	console.log(quadrato)

	cella.classList.add('bg-green')
	cella.removeEventListener('click', onClick)
	// console.log(i + 1)
}

// grigliaElement.addEventListener('click', function (event) {
// 	console.log('target:', event.target)
// 	console.log('this:', this)

// 	let griglia = this
// 	let cella = event.target
// 	cella.classList.add('bg-green')
// })
