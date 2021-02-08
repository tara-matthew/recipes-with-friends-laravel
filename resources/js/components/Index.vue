<template>
    <nav class="mx-auto bg-green-400 p-5 flex justify-between">
        <div>
            <a>Recipes With Friends</a>
        </div>
        <ul class="flex flex-column">
            <li class="pr-5"><router-link to="createRecipe">New Recipe</router-link></li>
            <li class="pr-5">Random Recipe</li>
            <li class="pr-5">Sign Out</li>
        </ul>
    </nav>
</template>
