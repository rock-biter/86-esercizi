import { createApp } from 'vue'
import './style.css'
import App from './App.vue'

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import { faStar } from '@fortawesome/free-solid-svg-icons'
// dobbiamo importarla con un alias
import {
	faStar as faStarRegular,
	faUser,
} from '@fortawesome/free-regular-svg-icons'

library.add(faStar, faStarRegular, faUser)

createApp(App).component('font-awesome-icon', FontAwesomeIcon).mount('#app')
