const { createApp } = Vue

createApp({
	data() {
		return {
			tasks: [
				'Fare la spesa',
				'Chiamare i vigile del Fuoco',
				'Mandare la consegna alla classe',
				'Fare push',
			],
			inputValue: '',
		}
	},
	methods: {
		addTask() {
			// console.log('add task:', this.inputValue)
			const newTask = this.inputValue
			this.tasks.push(newTask)
			this.inputValue = ''
		},
		removeTask(startIndex) {
			console.log(
				'elimino il task con indice:',
				startIndex,
				this.tasks[startIndex]
			)
			this.tasks.splice(startIndex, 1)
		},
	},
}).mount('#app')

const nomi = ['Anna', 'Maria', 'Martina']
const indexOfMaria = 1
nomi.splice(indexOfMaria, 1)
console.log(nomi)
