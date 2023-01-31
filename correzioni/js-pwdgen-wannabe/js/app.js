console.log('works!')

let firstName, lastName, color, number

// 1. chiedere il nome
firstName = prompt('Nome:')
// console.log(firstName)
// 2. chiedere il congome
lastName = prompt('Cognome:')
// 3. chiedere il colore preferito
color = prompt('Colore:')
// 4. chiedere un numero random
number = prompt('Eta:')
// 5. generare la pawword, concatenando nome, cognome, colore, numero
const pw = firstName + lastName + color + number
console.log(pw)
// 6. stampare dentro h1 la password

const h1Element = document.getElementById('password')
h1Element.innerHTML = pw
