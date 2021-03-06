<template>
    <h1 class="text-5xl">View all recipes</h1>
    <div class="mb-5">
        <button v-on:click="sortAlphabetically" class="border-4 border-black mr-3">Sort Alphabetically</button>
        <button v-on:click="sortReverseAlphabetically" class="border-4 border-black mr-3">Sort Reverse Alphabetically</button>
        <button v-on:click="sortByLatest" class="border-4 border-black mr-3">Sort By Latest</button>
    </div>
    <div class="text-center m-0 m-auto w-3/6 hover:bg-blue-200" v-if="recipes" v-for="recipe in recipes" :key="recipe">
        <router-link :to="{ path: '/recipes/' + recipe.id }">
            <p class="font-bold">{{ recipe.title }}</p>
            <p>{{ recipe.story }}</p>
        </router-link>
    </div>
</template>

<script>
export default {
    emits: ["updateRecipes"],
    props: {
      recipes: {}
    },
    methods: {
        sortAlphabetically() {
            window.axios.get('/api/recipes?sort=title&direction=asc').then(response => {
                this.$emit('updateRecipes', response.data)
            })
        },
        sortReverseAlphabetically() {
            window.axios.get('/api/recipes?sort=title&direction=desc').then(response => {
                this.$emit('updateRecipes', response.data)
            })
        },
        sortByLatest() {
            window.axios.get('/api/recipes?sort=created_at&direction=asc').then(response => {
                this.$emit('updateRecipes', response.data)
            })
        },
    }
}
</script>
