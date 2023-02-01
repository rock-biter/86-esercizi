// const element = document.querySelector('.red:nth-child(3)')

// console.dir(element.className)

// element.addEventListener('click', function () {
// 	console.log('click su element')
// 	element.classList.toggle('bg-primary')

// 	if (element.innerHTML) {
// 		element.innerHTML = ''
// 	} else {
// 		element.innerHTML = 'ahahaha'
// 	}
// })

// element.className += ' bg-primary'
// element.classList.add('bg-primary')

// console.log(element.classList)

// element.classList.remove('red')
// element.classList.toggle('red')
// element.classList.toggle('bg-primary')

// console.log(element.style)

// element.style.paddingLeft = '50px'

// element.innerHTML += ' <p>aggiunto con js</p>'

// element.append('<a href="#">appeso</a>')
// element.prepend('<a href="#">prepeso</a>')

// const ancora = '<a href="#">appeso</a>'
// ancora.classList.add()

// element.remove()
// console.log(element.outerHTML)

// const listElement = document.querySelector('ul')
// console.log(listElement)
// listElement.innerHTML += element.outerHTML

// CONTATORE
// INCREMENTARE UN CONTATORE NELLA PAGINA AL CLICK SU UN BOTTONE
const btnElement = document.querySelector('#counter .btn')
const counterElement = document.querySelector('#counter .counter')
console.log(btnElement, counterElement)

btnElement.addEventListener('click', function () {
	console.log('click btn')

	let counter = parseInt(counterElement.innerHTML)
	if (counter < 10) {
		// console.log(counter)
		counterElement.innerHTML = counter + 2
	}

	// if (counter > 10) {
	// 	console.log('bravo continua così')
	// }

	// if (counter > 20) {
	// 	console.log('ehi adesso basta...')
	// }
})

// SECONDO ESEMPIO
// MODIFICARE LARGHEZZA E COLOR DI UN BOX USANDO GLI INPUT DI UN FORM
const formBtnElement = document.querySelector('#example-2 input[type="button"]')

const boxElement = document.querySelector('#example-2 .box')
const inputWidthElement = document.querySelector(
	'#example-2 input[name="width"]'
)
const selectColorElement = document.querySelector(
	'#example-2 select[name="color"]'
)

console.log(formBtnElement, boxElement, inputWidthElement, selectColorElement)

formBtnElement.addEventListener('click', function () {
	console.log('applica modifiche al box')

	console.log(inputWidthElement.value, selectColorElement.value)

	let width = inputWidthElement.value
	boxElement.style.width = width + 'px'

	let color = selectColorElement.value

	switch (color) {
		case 'red':
			boxElement.style.backgroundColor = 'red'
			break
		case '2':
			boxElement.style.backgroundColor = 'blue'
			break
		case '3':
			boxElement.style.backgroundColor = 'green'
			break
		default:
			boxElement.style.backgroundColor = '#d5d5d5'
	}
})
