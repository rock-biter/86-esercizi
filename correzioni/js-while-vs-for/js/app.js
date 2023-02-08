console.log('ciao')

// arrey dei numeri dispari
const listaNumeri = []

// do {
//   //...

// } while(listaNumeri.length < 5)

while (listaNumeri.length < 5) {
	console.log(listaNumeri)

	// chiedere un numero all'utente
	let num = parseInt(prompt('Inserire un numero intero'))
	console.log(num)

	if (isNaN(num)) {
		// se nana salto tutto il resto del codice e passo alla prossima iterazione del ciclo
		continue
	}

	//se il numero è dispari lo pusho dentro listaNumeri
	const resto = num % 2

	console.log(resto)
	// constrolliamo se è pari o dispari
	// if (resto === 0) {
	// 	console.log('pari')
	// } else {
	// 	console.log('dispari')
	// 	listaNumeri.push(num)
	// }
	if (resto === 1) {
		console.log('dispari')
		listaNumeri.push(num)
	}
}

console.log(listaNumeri)

for (let i = 0; i < listaNumeri.length; i++) {
	const numeroCorrente = listaNumeri[i]
	console.log(numeroCorrente)
}

function sommaNumeri(num1, num2) {
	alert(num1 + num2)
	const sum = num1 + num2
	return sum
}

const sommma = sommaNumeri(5, 10)
const somma2 = sommaNumeri(15, 20)
