console.log('prendo elemento html con id first-title')
const titleElement = document.getElementById('first-title')

// titleElement = 'pippo'

console.log(titleElement.innerHTML)
console.dir(titleElement)

console.log('imposto innerHTML di titleElement')
titleElement.innerHTML = 'Buongiorno a tutti'
titleElement.className = 'title bg-secondary'

// document.writeln('Ho scritto sul document con js')
// alert('ciao da app.js')

// posso midifcare il contenuto in questo caso
titleElement.innerHTML = 'ciao pippo'

// riassegnando un valore alla variabile titleElement
// titleElement = 'ciao'

let nome
let cognome
let message = 'Benvenuto '

// nome = prompt('Come ti chiami?')
// console.log('la varianile nome è = ', nome)

// cognome = prompt('E il tuo cognome?')
// console.log('la variabile cognome è = a', cognome)

// console.log('modifico innerHTML  di titleELent')
// // CONCATENAZIONE DI STRINGHE
// titleElement.innerHTML = message + nome + ' ' + cognome + '.'

// let a, b
// const a = prompt('inserire un numero')
// const b = prompt('inserisci un altro numero')

// a = parseFloat(a)
// b = parseInt(b)

// // let totale = a + parseInt(b)
// console.log(a, b)

// // let pow2 = 2 ** 3
// console.log('la somma è:', a + b) //somma
// console.log(a - b) //sottrazione
// console.log(a / b) //divisione
// console.log(a % b) //modulo
// console.log(a * b) //moltiplicazione
// console.log(a ** b) //potenza

// nome = '<span>Mario</span>'
// alert(nome)

// titleElement.innerHTML = nome

// //
// let prezzoAlLitro = 1.85

// prezzoAlLitro = '1.85 euro'

// prezzoAlLitro = false

// console.log(typeof prezzoAlLitro)

// 1. chiedere nome all'utente
let name = prompt('dimmi come ti chiami')
console.log(name)
// 2. chidere cognome all'utente
// 3. chiedere colore preferito
// 4. chiedere un numero
// ....
