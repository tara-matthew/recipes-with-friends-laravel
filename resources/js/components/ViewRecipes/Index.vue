<template>
    <page-header></page-header>
    <recipe-details v-if="Object.keys(recipes).length !== 0" :recipes="recipes" @updateRecipes="recipes = $event"></recipe-details>
</template>

<script>
    import RecipeDetails from '@/js/components/ViewRecipes/Details';

    export default {
        data() {
            return {
                recipes: {}
            }
        },
        async mounted() {
            window.axios.get('/api/recipes').then(response => {
                this.recipes = response.data;
            })
        },
        components: {
            RecipeDetails
        }
    }
</script>
