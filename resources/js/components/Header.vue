<template>
    <nav class="mx-auto bg-green-header p-5 flex justify-between h-16">
        <div>
            <a><router-link to="/">Recipes With Friends</router-link></a>
        </div>
        <ul class="flex flex-column">
            <li class="pr-5"><router-link to="/recipes">All Recipes</router-link></li>
            <li class="pr-5"><router-link to="/recipes/create">New Recipe</router-link></li>
            <li class="pr-5">Random Recipe</li>
            <li class="pr-5">Sign Out</li>
        </ul>
    </nav>
</template>
