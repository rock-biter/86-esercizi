/**
 *
 * DESTRUTTURAZIONE SU OGGETTI
 *
 */

const teamMember = {
	nome: 'Mimmo Spugna',
	ruolo: 'Founder & CEO',
	sourceImg: './img/foto-di-mimmo-al-mare.jpg',
}

const { nome, ruolo, sourceImg } = teamMember
console.log(nome, ruolo, sourceImg)

// equivale a fare:
// const nome = teamMember.nome
// const ruolo = teamMember.ruolo
// const suorceImg = teamMember.suorceImg

/**
 *
 * DESTRUTTURAZIONE SU ARRAY
 *
 */
const nomi = ['Marta', 'Maria', 'Giuseppina', 'Ambra']

let [nome1, , nome3] = nomi
console.log(nome1, nome3)

// equivale a fare:
// const nome1 = nomi[0]
// const nome3 = nomi[2]

//
/**
 *
 * SPREAD SU ARRAY
 *
 */
const altriNomi = [...nomi]

nomi.push('Gianni')
altriNomi.reverse()
console.log(nomi, altriNomi)

/**
 *
 *
 * SPREAD SU OGGETTI
 *
 */
const team2 = {
	...teamMember,
}

// equivale a fare:
// for (let key in teamMember) {
// 	const value = teamMember[key]

// 	team2[key] = value
// }

team2.age = 32

console.log(team2, teamMember)

/**
 *
 * METODI AVANZATI SUGLI ARRAY
 *
 */

const numeri = [1, 5, 3, 6, 4, 9, 8, 5, 6, 7, 10]
console.log(numeri)

/**
 *
 * CICLARE UN ARRAY
 *
 */
const numeriDoppi = []
numeri.forEach((el, index, array) => {
	const num = el * 2
	numeriDoppi.push(num)
})

for (let i = 0; i < numeri.length; i++) {
	const el = numeri[i]
	forEachCallback(el, i, numeri)
}

console.log(numeriDoppi)

function forEachCallback(el, i, array) {
	console.log(el)
}

/**
 *
 * MAPPARE UN ARRAY
 *
 */

const numeriAlCubo = numeri.map((element, index, array) => {
	const cubo = element ** 3
	return cubo
})

console.log(numeriAlCubo)

const nuovoArray = []
for (let i = 0; i < numeri.length; i++) {
	const el = numeri[i]
	const nuovoEl = mapCallback(el, i, numeri)
	nuovoArray.push(nuovoEl)
}

console.log(nuovoArray)

function mapCallback(element, index, array) {
	return element ** 3
}

const team = [
	teamMember,
	{
		nome: 'Angela Caroll',
		ruolo: 'Chief Editor',
		sourceImg: './img/angela-caroll-chief-editor.jpg',
	},
	{
		nome: 'Walter Gordon',
		ruolo: 'Office Manager',
		sourceImg: './img/walter-gordon-office-manager.jpg',
	},
	{
		nome: 'Angela Lopez',
		ruolo: 'Social Media Manager',
		sourceImg: './img/angela-lopez-social-media-manager.jpg',
	},
	{
		nome: 'Scott Estrada',
		ruolo: 'Developer',
		sourceImg: './img/scott-estrada-developer.jpg',
	},
	{
		nome: 'Barbara Ramos',
		ruolo: 'Graphic Designer',
		sourceImg: './img/barbara-ramos-graphic-designer.jpg',
	},
]

// da un array di oggetti ci generiamo un array di stringhe nomi
team.map((teamMember) => {
	return teamMember.nome
})

console.log(teamNames)

// numeri.find(() => {})
// numeri.filter(() => {})

/**
 *
 * FILTRARE UN ARRAY
 *
 */
const numeriPari = numeri.filter((element, index, array) => {
	const resto = element % 2

	if (resto === 0) {
		return true
	} else {
		return false
	}
})

// const newArray = []
// for (let i = 0; i < numeri.length; i++) {
// 	const el = numeri[i]

// 	const result = filterCallback(el, i, numeri)

// 	if (result === true) {
// 		newArray.push(el)
// 	}
// }

// function filterCallback(element, index, array) {
// 	const resto = element % 2

// 	return resto === 0
// }

console.log(numeriPari)

// numeri.sort(() => {})
