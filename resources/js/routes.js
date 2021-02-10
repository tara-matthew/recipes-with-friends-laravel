import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/js/components/Home/Index';
import CreateRecipe from '@/js/components/CreateRecipe/Index';
import Recipes from '@/js/components/ViewRecipes/Index';

export default createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/create-recipe',
            name: 'createRecipe',
            component: CreateRecipe
        },
        {
            path: '/view-recipes',
            name: 'recipes',
            component: Recipes
        },

    ]
})
