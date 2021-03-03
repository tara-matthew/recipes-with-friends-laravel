import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/js/components/Home/Index';
import CreateRecipe from '@/js/components/CreateRecipe/Index';
import Recipes from '@/js/components/ViewRecipes/Index';
import ViewRecipe from '@/js/components/ViewRecipe/Index';

export default createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/recipes/create',
            name: 'createRecipe',
            component: CreateRecipe
        },
        {
            path: '/recipes',
            name: 'recipes',
            component: Recipes
        },
        {
            path: '/recipes/:recipeId',
            name: 'viewRecipe',
            component: ViewRecipe
        }

    ]
})
