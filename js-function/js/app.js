console.log('funzioni')

const numero = 21

// const resto = numero % 2

if (isEven(numero)) {
	console.log('numero è pari', numero)
} else {
	console.log('numero è dispari', numero)
}

if (isOdd(numero)) {
	console.log('numero è dispari', numero)
}

// isEven(numero) //true se numero è pari, false se il numero è dispari
// isOdd(numero) //true se il numero è dispari, false se il numero è pari

function isEven(num) {
	// const resto = num % 2
	// if (resto === 0) {
	// 	return true
	// } else {
	// 	return false
	// }
	let numIsEven = isDivisible(num, 2)
	return numIsEven
}

function isOdd(num) {
	const resto = num % 2
	return resto === 1
	// if(resto === 1) {
	//   return true
	// } else {
	//   return false
	// }
}

if (isDivisible(numero, 3)) {
	console.log(numero, ' è divisibile per 3', 'Fizz')
} else if (isDivisible(numero, 5)) {
	console.log(numero, ' è divisibile per 5', 'Buzz')
}

function isDivisible(num, divider) {
	//10, 3
	const resto = num % divider // 10 % 3
	if (resto === 0) {
		return true
	} else {
		return false
	}
}

const firsName = 'Giorgio'

// const tagString = `<div>${firsName}</div>`

// appendTag(tagString)

const nomi = ['Giorgio', 'Marco', 'Giulia', 'Stefano', 'Gianluca']

// invochiamo la funzione
printNameList(nomi)

/**********
FUNZIONI
***********/

function printNameList(listaNomi) {
	console.log(listaNomi)

	for (let i = 0; i < listaNomi.length; i++) {
		const nomeCorrente = listaNomi[i]
		// console.log(nomeCorrente)
		const tagString = `<div>${nomeCorrente}</div>`
		// console.log(tagString)
		appendTag(tagString)
	}
}

function appendTag(tag) {
	// nome += '!'
	// console.log('parametro della funzione', nome)
	// console.log('varibiele esterna', nome)

	document.getElementById('content').innerHTML += tag

	// return true
}
