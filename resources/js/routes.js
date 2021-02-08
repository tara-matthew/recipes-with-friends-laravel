import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/js/components/Index';
import CreateRecipe from '@/js/components/CreateRecipe/Index'

export default createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/createrecipe',
            name: 'createRecipe',
            component: CreateRecipe
        }
    ]
})
