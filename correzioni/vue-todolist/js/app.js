const { createApp } = Vue

createApp({
	data() {
		return {
			tasks: [
				{
					text: 'Fare la spesa',
					done: true,
				},
				{
					text: 'Chiamare i vigile del Fuoco',
					done: false,
				},
				{
					text: 'Mandare la consegna alla classe',
					done: false,
				},
				{
					text: 'Fare push',
					done: true,
				},
			],
			inputValue: '',
			// done: true,
		}
	},
	methods: {
		addTask() {
			// console.log('add task:', this.inputValue)
			let text = this.inputValue.trim()

			if (text === '') {
				this.inputValue = ''
				return
			}

			const newTask = {
				text: text,
				done: false,
			}

			this.tasks.push(newTask)
			this.inputValue = ''
		},
		removeTask(startIndex) {
			// console.log(
			// 	'elimino il task con indice:',
			// 	startIndex,
			// 	this.tasks[startIndex]
			// )
			this.tasks.splice(startIndex, 1)
		},
		toggleTaskState(task) {
			// const task = this.tasks[index]

			task.done = !task.done
			// if (task.done === true) {
			// 	task.done = false
			// } else {
			// 	task.done = true
			// }
		},
	},
}).mount('#app')

const nomi = ['Anna', 'Maria', 'Martina']
const indexOfMaria = 1
nomi.splice(indexOfMaria, 1)
console.log(nomi)

// const btnEl = document.createElement('button')

window.addEventListener('keyup', (e) => {
	// e.stopPropagation()
	console.log('keyup', e)
	if (e.key === 'Enter') {
		console.log('ho premuto il tasto enter')
	}
})
