console.log('teams')

const teamElement = document.querySelector('.team')
console.log(teamElement)

const teamMember = {
	nome: 'Wayne Barnett',
	ruolo: 'Founder & CEO',
	sourceImg: './img/wayne-barnett-founder-ceo.jpg',
}

const team = [
	teamMember,
	{
		nome: 'Angela Caroll',
		ruolo: 'Chief Editor',
		sourceImg: './img/angela-caroll-chief-editor.jpg',
	},
	{
		nome: 'Walter Gordon',
		ruolo: 'Office Manager',
		sourceImg: './img/walter-gordon-office-manager.jpg',
	},
	{
		nome: 'Angela Lopez',
		ruolo: 'Social Media Manager',
		sourceImg: './img/angela-lopez-social-media-manager.jpg',
	},
	{
		nome: 'Scott Estrada',
		ruolo: 'Developer',
		sourceImg: './img/scott-estrada-developer.jpg',
	},
	{
		nome: 'Barbara Ramos',
		ruolo: 'Graphic Designer',
		sourceImg: './img/barbara-ramos-graphic-designer.jpg',
	},
]

for (let i = 0; i < team.length; i++) {
	let teamCorrente = team[i]
	// console.log(teamCorrente)

	// for (let key in teamCorrente) {
	// 	let value = teamCorrente[key]

	// 	console.log(key, ':', value)

	// 	switch (key) {
	// 		case 'sourceImg':
	// 			teamElement.innerHTML += `<img src="${value}" width="100">`
	// 			break
	// 		case 'nome':
	// 			teamElement.innerHTML += `<h2>${value}</h2>`
	// 			break
	// 		default:
	// 			teamElement.innerHTML += `<p>${value}</p>`
	// 	}
	// }

	// console.log('-----------')
	// teamElement.innerHTML += '<br>'
	// const nome = teamCorrente.nome
	// const ruolo = teamCorrente.ruolo
	// const sourceImg = teamCorrente.sourceImg

	// DESTRUTTURAZIONE OGGETTO
	const { nome, ruolo, sourceImg, age } = teamCorrente

	// console.log(nome, ruolo, sourceImg)

	let className = ''

	const listItem = document.createElement('li')
	listItem.classList.add('card')

	listItem.innerHTML = `
		<img class="card__thumbnail" src="${sourceImg}" alt="">
	    <div class="card__body">
	      <h2 class="team__name">${nome}</h2>
	      <p class="team__role">${ruolo}</p>
    </div>
	`

	// const listItem = `
	//   <li class="card ${className}">
	//     <img class="card__thumbnail" src="${sourceImg}" alt="">
	//     <div class="card__body">
	//       <h2 class="team__name">${nome}</h2>
	//       <p class="team__role">${ruolo}</p>
	//     </div>
	//   </li>
	// `

	// teamElement.innerHTML += listItem
	teamElement.append(listItem)
}

// for (let i in team) {
// 	console.log(i, ':', team[i])
// }
