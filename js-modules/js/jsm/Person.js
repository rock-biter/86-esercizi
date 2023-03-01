const PERSON_DEFAULT_NAME = 'Pippo'

export default class Person {
	name = PERSON_DEFAULT_NAME
	email
	age

	constructor(_name, _email, _age) {
		this.name = _name
		this.age = _age
		this.email = _email
	}

	sayHello() {
		console.log(`Ciao mi chiamo ${this.name}!`)
	}

	eat(food) {
		console.log(`Sto mangiando un ${food.name}!`)
	}
}

export class People {
	items = []

	addPerson(person) {
		this.items.push(person)
	}
}
