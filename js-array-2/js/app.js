console.log('array 2')

let a = 10
// assegnando a b il valore di a
let b = a

// incrementando b
b++

console.log('a: ', a)
console.log('b: ', b)

const nomi = ['gian', 'luca']
const nomi2 = ['gian', 'luca']

// assegno a altriNomi il valore di nomi
const altriNomi = nomi

// pusho maria dentro altriNomi
altriNomi.push('Maria')

console.log('nomi: ', nomi)
console.log('altriNomi: ', altriNomi)
console.log(nomi === altriNomi)

let cloneArray = [...nomi] // spread operator
let clone2Array = [nomi]

cloneArray.push('Susan')

console.log(cloneArray, clone2Array)
// for (let i = 0; i < nomi.length; i++) {
// 	const nomeCorrente = nomi[i]
// 	cloneArray.push(nomeCorrente)
// }

// nomi.push('Antonio')

// // cloneArray.push('Pasquale')
// console.log('clone: ', cloneArray, nomi)
// console.log(cloneArray === nomi)
