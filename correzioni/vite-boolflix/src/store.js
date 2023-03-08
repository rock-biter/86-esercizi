import { reactive } from 'vue'

const store = reactive({
	movies: [],
	tv: [],
	search: '',
	config: {
		API_KEY: 'e99307154c6dfb0b4750f6603256716d',
		BASE_URI: 'https://api.themoviedb.org/3',
	},
})

export default store
