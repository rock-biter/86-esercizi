console.log('fizzbuzz')

const grigliaElement = document.getElementById('griglia')

for (let i = 0; i < 100; i++) {
	let n = i + 1
	// console.log(n)

	const mod3 = n % 3
	const mod5 = n % 5
	// console.log(n, mod3)
	let message = n

	if (mod5 === 0 && mod3 === 0) {
		// console.log(n, 'FizzBuzz')
		message = 'FizzBuzz'
	} else if (mod3 === 0) {
		// console.log(n, 'Fizz')
		message = 'Fizz'
	} else if (mod5 === 0) {
		// console.log(n, 'Buzz')
		message = 'Buzz'
	}
	// POSSIAMO FARE A MENO DEL BLOCCO ELSE INIZIALIZZANDO MESSAGE = n (vedi riga 12)
	// else {
	// 	// console.log(n)
	// 	message = n
	// }

	console.log(message)
	// let divString = '<div>' + message + '</div>'

	// CREIAMO L'LEMENTO COME STRINGA (CONCATENAZIONE)
	// let cella = '<div class="cell ' + message + '">' +
	//                 '<span>' + message +'</span>' +
	//             '</div>'

	// CREIAMO L'LEMENTO COME STRINGA (TEMPLATE LITERAL)
	let cellaString = `
  <div class="cell ${message}">
      ${message}
  </div>
  `

	// CREARE UN ELEMENTO DEL DOM COME OGGETTO CI DA DIVERSI VANTAGGI
	const cellaELement = document.createElement('div')

	//AD ESEMPIO:
	// POSSIAMO AGGIUNGERCI DEGLI EVENT LISTENER
	cellaELement.addEventListener('click', function () {
		console.log(message)
	})
	// <div></div>

	// POSSIAMO MODIFICARE IL SUO INNER HTML
	cellaELement.innerHTML = message

	// POSSIAMO AGGIUNGERE DELLE CLASSI IN QUESTI MODI
	// cellaELement.className = 'cell ' + message
	cellaELement.classList.add('cell', 'message', message)
	console.log(cellaELement)

	// cella.classList.add('bg-primary')
	// console.log(typeof cella, typeof grigliaElement)
	// grigliaElement.classList.toggle('griglia-bella')
	console.dir(grigliaElement)

	// POSSIAMO USARE IL METODO APPEND
	//PER APPENDERE UN ELEMENTO HTML COME OGGETTO DENTRO UN ALTRO ELEMENTO
	grigliaElement.append(cellaELement)
	//CON INNER HMTL NON FUNZIONA PERCHE CELLA ELEMENT È UN OGGETTO E NON UNA STRINGA
	// grigliaElement.innerHTML += cellaELement

	// INNER HTML LO USIAMO SE L'ELEMENTO HTML LO CREIAMO COME STRINGA
	// grigliaElement.innerHTML += cellaString
	// grigliaElement.innerHTML = grigliaElement.innerHTML + divString //versione estesa
}
