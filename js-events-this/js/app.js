console.log('ok')

const btnEl = document.getElementById('btn')
console.log(btnEl)

btnEl.addEventListener('click', onClick)
// btnEl.addEventListener('click', function (event) {
// 	console.log('click funzione anonima')
// 	console.log(event.target === this)

// 	const elementoCliccato = event.target
// 	elementoCliccato.classList.toggle('bg-red')
// })

function onClick(event) {
	console.log('hai cliccato')
	console.log(event)
	console.log(this)
	const element = this
	// posso in questo caso rimuovere l'event listener
	element.removeEventListener('click', onClick)
}

onClick()

// btnEl.addEventListener('mouseenter', function (event) {
// 	console.log('mouse enter', event)
// 	const el = event.target
// 	console.dir(el)

// 	console.log(el.style.top)
// 	console.log(el.style.left)

// 	const yCoord = Math.random() * 100
// 	const xCoord = Math.random() * 100

// 	el.style.top = yCoord + '%'
// 	el.style.left = `${xCoord}%`
// })

// onClick(oggettoEvento)

console.log(window)

window.addEventListener('resize', function (event) {
	console.log('on resize', event)
})

const cursorEl = document.getElementById('cursor')

window.addEventListener('mousemove', function (event) {
	// console.log(event)

	const x = event.clientX
	const y = event.clientY

	cursorEl.style.top = y + 'px'
	cursorEl.style.left = x + 'px'
})
