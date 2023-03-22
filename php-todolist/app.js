const { createApp } = Vue

createApp({
	data() {
		return {
			title: 'Todo list',
			todos: [],
			newTodo: '',
		}
	},
	methods: {
		saveTask() {
			console.log('save task', this.newTodo)

			$data = {
				todo: this.newTodo,
			}

			axios
				.post('./server.php', $data, {
					headers: {
						'Content-Type': 'multipart/form-data',
					},
				})
				.then((res) => {
					this.todos = res.data
					// this.todos.push(this.newTodo)
					this.newTodo = ''
				})
				.catch((err) => {
					console.log(err)
				})
		},
		fetchTodoList() {
			axios
				.get('./server.php')
				.then((res) => {
					console.log(res.data)
					this.todos = res.data
				})
				.catch((err) => {
					console.log(err)
					this.todos = []
				})
		},
	},
	mounted() {
		this.fetchTodoList()
	},
}).mount('#app')
