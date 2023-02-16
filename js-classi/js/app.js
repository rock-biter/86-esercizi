console.log('classi')

const mario = {
	nome: 'Mario',
	cognome: 'Rossi',
	peso: 78,
	altezza: 181,
	saluta: function () {
		console.log('Ciao amici!')
	},
}

console.log(mario)
mario.saluta()

const anna = {
	nome: 'Anna',
	cognome: 'Verdi',
	peso: 57,
	altezza: 165,
	saluta: function () {
		console.log('Ciao amici!')
	},
}

console.log(anna)
anna.saluta()

const luca = creaPersona('Luca', 'Gialli', 89, 178)
console.log(luca)
luca.saluta()

function creaPersona(_nome, _cognome, _peso, _altezza) {
	let persona = {
		nome: _nome,
		cognome: _cognome,
		peso: _peso,
		altezza: _altezza,
		saluta: function () {
			console.log('Ciao amici!')
		},
		mangia: function (cibo) {
			console.log('mhmm che buono')
		},
	}

	return persona
}

const panino = {
	nome: 'Panino con la porchetta',
	costo: 7.5,
	peso: 400,
	ingredienti: ['Pane', 'Porchetta', 'Porchetta', 'Altra porchetta'],
}

luca.mangia(anna)

const date = new Date()

class Cibo {
	//nome del cibo - String
	nome
	// peso del cibo in grammi - Number
	peso
	//elenco ingredienti - Array(String)
	ingredienti = []

	constructor(_nome, _peso, _ingredienti) {
		this.nome = _nome
		this.peso = _peso
		this.ingredienti = _ingredienti
	}
}

const pasta = new Cibo('Spaghetti al pomodoro', 150, [
	'pasta di grano duro',
	'passata di pomodoro',
	'olio',
	'formaggio',
])

const lasagne = new Cibo('Lasagne al forno', 400, [
	'Psta sfoglia',
	'Macinato misto',
	'Burro',
	'Farina',
	'Latte',
	'Pomodoro',
])

const panino2 = new Cibo('Panino vegano', 220, [
	'Pane',
	'lattuga',
	'aria fritta',
])

console.log(pasta, lasagne, panino2)

class Persona {
	//nome della persona - String
	nome
	//cognome della persona - String
	cognome
	// altezza in cm - Number
	altezza
	// peso in kg = Number
	peso = 85

	eMalato = false

	constructor(_nome, _cognome, _peso, _altezza) {
		this.nome = _nome
		this.cognome = _cognome
		this.peso = _peso
		this.altezza = _altezza
	}

	saluta = function () {
		console.log('ciao amici!')
	}

	mangia(cibo) {
		if (cibo instanceof Cibo) {
			console.log('Molto buono questo ' + cibo.nome)
			this.peso += grammiToKg(cibo.peso)
			console.log('adesso peso:', this.peso)
		} else {
			console.log('Io questo non lo posso mangiare')
		}
	}
}

function grammiToKg(grammi) {
	return grammi / 1000
}

const beppe = new Persona('Giuseppe', 'Bianchi')
console.log(beppe)

beppe.altezza = 187
beppe.peso = 92

console.log(panino instanceof Persona)

beppe.saluta()

// const carlo = new Persona()
beppe.mangia(anna)
beppe.mangia(lasagne)

beppe.mangia(panino2)
beppe.mangia(pasta)

// const nome = prompt('Nome:')
// const cognome = prompt('Cognome:')
// const peso = parseInt(prompt('Peso (kg):'))
// const altezza = parseInt(prompt('Altezza (cm):'))

// const utente = new Persona(nome, cognome, peso, altezza)

const app = new Vue({})
