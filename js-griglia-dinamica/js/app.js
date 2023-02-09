console.log('griglia')

let latoGriglia = 8
let numeroCelle = latoGriglia * latoGriglia

console.log(latoGriglia, numeroCelle)

const grigliaElement = document.querySelector('.griglia')
console.log(grigliaElement)

for (let i = 0; i < numeroCelle; i++) {
	let num = i + 1
	console.log(num)
	let divString = `<div class="cella" style="width: calc(100% / ${latoGriglia});" >${num}</div>` // <div> + num + </div>
	// console.log(divString)
	// let cellaElement = document.createElement('div')

	// divString.addEventListener('click', function () {
	// 	console.log('ciao')
	// })

	grigliaElement.innerHTML += divString
	// grigliaElement.append(cellaElement)

	// const el = document.querySelector('.cella:last-child')
	// console.dir(el)

	// el.addEventListener('click', function () {
	// 	console.log('ciao')
	// })
}

const celleElements = document.querySelectorAll('.cella')
// console.log(celleElements)

for (let i = 0; i < celleElements.length; i++) {
	const cella = celleElements[i]

	cella.addEventListener('click', function () {
		console.log(i + 1)
	})
}

function onClick() {
	console.log(i + 1)
}
