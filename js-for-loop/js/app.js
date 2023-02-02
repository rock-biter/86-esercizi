console.log('CICLO FOR')

let number

// for (let i = 0; i < 5; i++) {
// 	// istruzioni che vengono iterate
// 	console.log(i)
// }

// console.log('fine del ciclo')

// CONSOLE
/**
 *
 * 0
 * 1
 * 2
 * 3
 * 4
 * fine del ciclo
 *
 */

// i parte da 1
// for (let i = 1; i < 101; i++) {
// 	console.log(i)
// }

// for (let i = 0; i < 100; i += 2) {
// 	// NON MODIFICARE MAI L ÍNDICE DENTRO AL CICLO FOR!!!!
// 	// console.log(i++)
// 	console.log(i)
// }

// for (let i = 0; i < 100; i++) {
// 	// NON MODIFICARE MAI L ÍNDICE DENTRO AL CICLO FOR!!!!
// 	// console.log(i++)

// 	let number = i + 1
// 	console.log(number)
// }

// console.log('number fuori dal ciclo', number)

// for (let i = 0; i < 10; i++) {
// 	let number = (i + 1) * 3
// 	console.log(number)
// }

// const resto = 9 % 2

for (let i = 0; i < 100; i++) {
	const resto = i % 5
	console.log(i, resto)

	// if (resto === 0) {
	// 	console.log(i, 'è pari')
	// } else {
	// 	console.log(i, 'è dispari')
	// }

	// se multiplo di 3 stampo Fizz

	// se multiplo di 5 stampo Buzz

	// se multiplo di 15 stampo FizzBuzz

	if (resto === 0) {
		console.log('buzz')
	}
}
