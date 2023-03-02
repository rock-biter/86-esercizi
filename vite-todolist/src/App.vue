<template>
  <section class="py-5">
				<div class="container">
					<h1>TODOLIST</h1>
				</div>
				<div class="container py-3">
					<div class="mb-3 row">
						<label for="inputPassword" class="col-auto col-form-label"
							>Aggiungi task</label
						>
						<div class="col">
							<input
								type="text"
								class="form-control"
								id="inputPassword"
								placeholder="Nuova cosa da fare..."
								v-model="inputValue"
								@keyup.enter="addTask"
							/>
						</div>
						<div class="col-auto">
							<button @click="addTask" class="btn btn-primary">Aggiungi</button>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="card">
						<ul class="list-group list-group-flush">

              <Task @click="toggleTaskState(el)" v-for="el in tasks" :key="el.text" :task="el" text="ciao" />

						</ul>
					</div>
				</div>
			</section>
</template>

<script>
  import Task from './components/Task.vue'

  export default {
    components: {
      Task
    },
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
      }
    },
    methods:{
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
        console.log(
          'elimino il task con indice:',
          startIndex,
          this.tasks[startIndex]
        )
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
    }
  }
</script>

<style lang="scss">
@use './style/general.scss';

</style>