const { createApp } = Vue

// const slides = [
// 	{
// 		image: './img/01.webp',
// 		title: "Marvel's Spiderman Miles Morale",
// 		text: 'Experience the rise of Miles Morales as the new hero masters incredible, explosive new powers to become his own Spider-Man.',
// 	},
// 	{
// 		image: './img/02.webp',
// 		title: 'Ratchet & Clank: Rift Apart',
// 		text: 'Go dimension-hopping with Ratchet and Clank as they take on an evil emperor from another reality.',
// 	},
// 	{
// 		image: './img/03.webp',
// 		title: 'Fortnite',
// 		text: 'Grab all of your friends and drop into Epic Games Fortnite, a massive 100 - player face - off that combines looting, crafting, shootouts and chaos.',
// 	},
// 	{
// 		image: './img/04.webp',
// 		title: 'Stray',
// 		text: 'Lost, injured and alone, a stray cat must untangle an ancient mystery to escape a long-forgotten city',
// 	},
// 	{
// 		image: './img/05.webp',
// 		title: "Marvel's Avengers",
// 		text: "Marvel's Avengers is an epic, third-person, action-adventure game that combines an original, cinematic story with single-player and co-operative gameplay.",
// 	},
// ]

// const nome = 'Pippo'
// console.log(nome)

createApp({
	data() {
		return {
			slides: [
				{
					image: './img/01.webp',
					title: "Marvel's Spiderman Miles Morale",
					text: 'Experience the rise of Miles Morales <br> as the new hero masters incredible, explosive new powers to become his own Spider-Man.',
				},
				{
					image: './img/02.webp',
					title: 'Ratchet & Clank: Rift Apart',
					text: 'Go dimension-hopping with <br> Ratchet and Clank as they take on an evil emperor from another reality.',
				},
				{
					image: './img/03.webp',
					title: 'Fortnite',
					text: 'Grab all of your friends <strong>and drop into Epic Games Fortnite</strong>, a massive 100 - player face - off that combines looting, crafting, shootouts and chaos.',
				},
				{
					image: './img/04.webp',
					title: 'Stray',
					text: 'Lost, injured and alone, a stray cat must untangle an ancient mystery to escape a long-forgotten city',
				},
				{
					image: './img/05.webp',
					title: "Marvel's Avengers",
					text: "Marvel's Avengers is an epic, third-person, action-adventure game that combines an original, cinematic story with single-player and co-operative gameplay.",
				},
			], //array di oggetti
			currentIndex: 0,
			autoplay: null,
		}
	},
	methods: {
		nextSlide() {
			console.log('next')
			const lastIndex = this.slides.length - 1
			// incrementare il currentIndex
			if (this.currentIndex < lastIndex) {
				this.currentIndex++
			} else {
				this.currentIndex = 0
			}
		},
		prevSlide() {
			console.log('prev')
			const lastIndex = this.slides.length - 1
			// descrementare il currentIndex
			if (this.currentIndex > 0) {
				this.currentIndex--
			} else {
				this.currentIndex = lastIndex
			}
		},
	},
	beforeCreate() {
		console.log('__BEFORE_CREATE__', this.currentIndex)
	},
	created() {
		console.log('__CREATED__')
	},
	beforeMount() {
		console.log('__BEFORE_MOUNT__')
	},
	mounted() {
		console.log('__MOUNTED__')
		console.log('slides: ', this.slides)

		this.autoplay = setInterval(this.nextSlide, 3000)
	},
	// beforeUpdate() {
	// 	console.log('__BEFORE_UPDATE)__')
	// },
	// updated() {
	// 	console.log('__UPDATED__')
	// },
}).mount('#app')
