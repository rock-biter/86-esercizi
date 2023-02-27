const { createApp } = Vue

const contacts = [
	{
		name: 'Michele',
		avatar: './img/avatar_1.jpg',
		visible: true,
		messages: [
			{
				date: '10/01/2020 15:30:55',
				message: 'Hai portato a spasso il cane?',
				status: 'sent',
			},
			{
				date: '10/01/2020 15:50:00',
				message: 'Ricordati di stendere i panni',
				status: 'sent',
			},
			{
				date: '10/01/2020 16:15:22',
				message: 'Tutto fatto!',
				status: 'received',
			},
		],
	},
	{
		name: 'Fabio',
		avatar: './img/avatar_2.jpg',
		visible: true,
		messages: [
			{
				date: '20/03/2020 16:30:00',
				message: 'Ciao come stai?',
				status: 'sent',
			},
			{
				date: '20/03/2020 16:30:55',
				message: 'Bene grazie! Stasera ci vediamo?',
				status: 'received',
			},
			{
				date: '20/03/2020 16:35:00',
				message: 'Mi piacerebbe ma devo andare a fare la spesa.',
				status: 'sent',
			},
		],
	},
	{
		name: 'Samuele',
		avatar: './img/avatar_3.jpg',
		visible: true,
		messages: [
			{
				date: '28/03/2020 10:10:40',
				message: 'La Marianna va in campagna',
				status: 'received',
			},
			{
				date: '28/03/2020 10:20:10',
				message: 'Sicuro di non aver sbagliato chat?',
				status: 'sent',
			},
			{
				date: '28/03/2020 16:15:22',
				message: 'Ah scusa!',
				status: 'received',
			},
		],
	},
	{
		name: 'Alessandro B.',
		avatar: './img/avatar_4.jpg',
		visible: true,
		messages: [
			{
				date: '10/01/2020 15:30:55',
				message: 'Lo sai che ha aperto una nuova pizzeria?',
				status: 'sent',
			},
			{
				date: '10/01/2020 15:50:00',
				message: 'Si, ma preferirei andare al cinema',
				status: 'received',
			},
		],
	},
	{
		name: 'Alessandro L.',
		avatar: './img/avatar_5.jpg',
		visible: true,
		messages: [
			{
				date: '10/01/2020 15:30:55',
				message: 'Ricordati di chiamare la nonna',
				status: 'sent',
			},
			{
				date: '10/01/2020 15:50:00',
				message: 'Va bene, stasera la sento',
				status: 'received',
			},
		],
	},
	{
		name: 'Claudia',
		avatar: './img/avatar_6.jpg',
		visible: true,
		messages: [
			{
				date: '10/01/2020 15:30:55',
				message: 'Ciao Claudia, hai novità?',
				status: 'sent',
			},
			{
				date: '10/01/2020 15:50:00',
				message: 'Non ancora',
				status: 'received',
			},
			{
				date: '10/01/2020 15:51:00',
				message: 'Nessuna nuova, buona nuova',
				status: 'sent',
			},
		],
	},
	{
		name: 'Federico',
		avatar: './img/avatar_7.jpg',
		visible: true,
		messages: [
			{
				date: '10/01/2020 15:30:55',
				message: 'Fai gli auguri a Martina che è il suo compleanno!',
				status: 'sent',
			},
			{
				date: '10/01/2020 15:50:00',
				message: 'Grazie per avermelo ricordato, le scrivo subito!',
				status: 'received',
			},
		],
	},
	{
		name: 'Davide',
		avatar: './img/avatar_8.jpg',
		visible: true,
		messages: [
			{
				date: '10/01/2020 15:30:55',
				message: 'Ciao, andiamo a mangiare la pizza stasera?',
				status: 'received',
			},
			{
				date: '10/01/2020 15:50:00',
				message: "No, l'ho già mangiata ieri, ordiniamo sushi!",
				status: 'sent',
			},
			{
				date: '10/01/2020 15:51:00',
				message: 'OK!!',
				status: 'received',
			},
		],
	},
]

const { DateTime } = luxon

createApp({
	data() {
		return {
			contacts: contacts,
			activeContactIndex: 3,
			message: '',
			search: '',
		}
	},
	watch: {
		activeContactIndex(newIndex, oldIndex) {
			console.log('newIndex:', newIndex)
			console.log('oldIndex:', oldIndex)
		},
	},
	computed: {
		activeContact() {
			return this.contacts[this.activeContactIndex]
		},
		// numberOfContacts() {
		// 	return this.contacts.length
		// },
		activeChat() {
			return this.activeContact.messages
		},
	},
	watch: {
		activeContactIndex() {
			this.resetMessage()
		},
	},
	methods: {
		setActiveContactIndex(index) {
			// controllare se index non è NaN e se è un indice valido
			this.activeContactIndex = index
		},
		getContactsLength() {
			return this.numberOfContacts
		},
		getActiveContact() {
			return this.contacts[this.activeContactIndex]
		},
		resetMessage() {
			this.message = ''
		},
		getDateAsString(format = 'dd/LL/yyyy') {
			const now = DateTime.now()
			// if (!format) {
			// 	format = 'dd/LL/yyyy'
			// }
			return now.toFormat(format)
		},
		isHidden(contact) {
			const name = contact.name.toLowerCase()
			const search = this.search.trim().toLowerCase()

			const result = !name.includes(search)
			// console.log(name, search, result)

			return result
			// return true || false
		},
		sendMessage() {
			const text = this.message.trim()
			console.log(text)

			if (text === '') return

			const date = this.getDateAsString('dd/LL/yyyy HH:mm:ss')
			// console.log(date)

			const messageObj = {
				date: date,
				message: text,
				status: 'sent',
			}

			console.log(messageObj)

			this.activeContact.messages.push(messageObj)
			this.resetMessage()

			const self = this
			const activeContact = this.contacts[this.activeContactIndex]

			setTimeout(() => {
				// creare il messaggio di risposta
				console.log(this, self)
				const risposta = {
					date: self.getDateAsString('dd/LL/yyyy HH:mm:ss'),
					message: 'ok',
					status: 'received',
				}
				console.log('risposta automatica', risposta)
				// pushare la risposta nella chat
				activeContact.messages.push(risposta)
			}, 2000)
		},
	},
}).mount('#app')

// const { DateTime } = luxon
// const DateTime = luxon.DateTime

// const now = DateTime.now()
// console.log(now)

// const date = DateTime.fromObject({
// 	year: 1990,
// 	month: 10,
// 	day: 24,
// 	hour: 14,
// 	minutes: 31,
// 	seconds: 56,
// })
// console.log(date)

// // '24/10/1990'
// const formattedDate = date.toFormat('dd/LL/yyyy')
// console.log(formattedDate)

// const dateToParse = '10/01/2020 15:30:55' // dd/LL/yyyy HH:mm:ss

// const parsedDate = DateTime.fromFormat(dateToParse, 'dd/LL/yyyy HH:mm:ss')
// console.log(parsedDate.toFormat('dd/LL/yyyy'))
