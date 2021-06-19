require('./bootstrap')

import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './main.vue'
import routes from './routes'

const router = createRouter({
    history: createWebHistory(),
    routes,
})

createApp(App).use(router).mount('#vueApp')
