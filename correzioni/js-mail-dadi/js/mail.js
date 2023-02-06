console.log('mail')

const emailList = [
	'gianni@gmail.com',
	'franco@gmail.com',
	'mario@gmail.com',
	'mimmo@gmail.com',
	'super@gmail.com',
]

console.log(emailList)

const userEmail = prompt('Indirizzo email:')
console.log(userEmail)

let emailTrovata = false

// const presente = emailList.includes( userEmail )
for (let i = 0; i < emailList.length; i++) {
	const emailCorrente = emailList[i]

	const sonoUguali = emailCorrente === userEmail
	console.log(emailCorrente, userEmail, sonoUguali)
	if (sonoUguali) {
		emailTrovata = true
		// break
	}
	// else {
	// 	emailTrovata = false
	// }
}

// console.log(emailTrovata) //true o false
if (emailTrovata === true) {
	console.log('Benvenuto alla festa')
} else {
	console.log('Lei non è nella lista degli invitati')
}
