import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '@/js/pages/HomeComponent'
import About from '@/js/pages/AboutComponent'


Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
    ]
})

export default router