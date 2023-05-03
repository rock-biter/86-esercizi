import { createRouter, createWebHistory } from 'vue-router'

import Home from './pages/Home.vue'
import AboutUs from './pages/AboutUs.vue'
import Contacts from './pages/Contacts.vue'
import PostsIndex from './pages/Posts.index.vue'
import NotFound from './pages/404.vue'

const history = createWebHistory()
console.log('history: ', history)

const router = createRouter({
	history,
	routes: [
		{
			path: '/',
			name: 'home',
			component: Home,
		},
		{
			path: '/about-us',
			name: 'about',
			component: AboutUs,
		},
		{
			path: '/contacts',
			name: 'contacts',
			component: Contacts,
		},
		{
			path: '/blog',
			name: 'posts.index',
			component: PostsIndex,
		},
		{
			path: '/404',
			name: '404',
			component: NotFound,
		},
	],
})

export { router }
