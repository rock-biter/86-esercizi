// console.log('object')

// const persona = {
// 	firstName: 'Gianluca',
// 	lastName: 'Lomarco',
// 	age: 32,
// 	avatar: './img/avatar.png',
// 	description: 'lorem impsum dolor sit amet...',
// 	chiave: 'proprietà chiave',
// 	saluta: function () {
// 		console.log('Ciao')
// 	},
// }

// console.log(persona.avatar)
// persona.children = ['Caterina', 'Benedetta', 'Chiara']

// console.log(persona['children'])

// console.log(persona)

// const nome = 'mauro'

// nome.length

// nome.split()

// const number = 10

// number.toFixed(2)

// persona.saluta()

for (let chiave in persona) {
	// console.log('chiave:', chiave)

	// console.log('persona.chiave:', persona.chiave) // persona['chiave']
	console.log(persona[chiave]) //persona['age']

	const value = persona[chiave]
	// const type = typeof value

	// console.log(type)
}

// const nomeProp = prompt('Quale proprità vuoi conoscere?')

// console.log(persona[nomeProp]) //persona['firstName']

function getFullName() {
	console.log(this)
	const firstName = this['firstName']
	const lastName = this.lastName
	return `${firstName} ${lastName}`
}

const studente = {
	matricola: '1234567',
	firstName: 'Mario',
	lastName: 'Rossi',
	age: 18,
	valutazioni: [23, 18, 29, 31, 14],
	getFullName: getFullName,
}

studente.getFullName() // Mario Rossi

const studenti = [
	studente,
	{
		matricola: '0056567',
		firstName: 'Maria',
		lastName: 'Verdi',
		age: 28,
		valutazioni: [23, 29, 27, 18, 29, 31, 14],
		getFullName: getFullName,
	},
	{
		matricola: '0000567',
		firstName: 'Carlo',
		lastName: 'Morroni',
		age: 32,
		valutazioni: [23, 18, 14],
		getFullName: getFullName,
	},
	{
		matricola: '0034567',
		firstName: 'Marta',
		lastName: 'Gialli',
		age: 27,
		valutazioni: [23, 19, 21, 30, 30, 31, 14],
		getFullName: getFullName,
	},
	{
		matricola: '0000957',
		firstName: 'Filippo',
		lastName: 'Neri',
		age: 21,
		valutazioni: [23, 18, 16, 23, 24],
		getFullName: getFullName,
	},
]

// studenti[2].valutazioni.push(30)
const studenteCarloMarroni = studenti[2]
const valutazioniCarloMarroni = studenteCarloMarroni.valutazioni
valutazioniCarloMarroni.push(31)

console.log(studenti)

for (let i = 0; i < studenti.length; i++) {
	const studenteCorrente = studenti[i]
	// console.log(studenteCorrente)
	const firstName = studenteCorrente.firstName
	const lastName = studenteCorrente.lastName
	const age = studenteCorrente.age
	const valutazione = studenteCorrente.valutazioni
	const media = calcolaMedia(valutazione)

	// console.log(firstName, lastName, age)
	console.log(
		`Lo studente: ${firstName} ${lastName} ha ${age} anni. Media esami: ${media.toFixed(
			2
		)}/30`
	)
}

function calcolaMedia(valutazioni) {
	let sum = 0

	for (let i = 0; i < valutazioni.length; i++) {
		const value = valutazioni[i]
		sum += value
	}

	const media = sum / valutazioni.length
	return media
}

const studentsTableEl = document.getElementById('students')
console.log(studentsTableEl)

for (let i = 0; i < studenti.length; i++) {
	const stud = studenti[i]
	// const firstName = stud.firstName
	// const lastName = stud.lastName
	const fullName = stud.getFullName()
	const age = stud.age
	const matricola = stud.matricola
	const valutazioni = stud.valutazioni
	const media = calcolaMedia(valutazioni)
	const numeroEsami = valutazioni.length

	const tr = `
  <tr>
    <td>${matricola}</td>
    <td>${fullName}</td>
    <td>${age}</td>
    <td>${numeroEsami}</td>
    <td>${media.toFixed(2)}/30</td>
  </tr>
  `

	studentsTableEl.innerHTML += tr
}

studenti[3].getFullName()
